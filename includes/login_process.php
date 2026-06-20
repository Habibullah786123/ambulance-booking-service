<?php

session_start();

require_once 'db.php';

// Get the referring page or default to index.php
$redirect_page = $_SERVER['HTTP_REFERER'] ?? '../index.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    $_SESSION['error'] = "Please enter both username and password.";
    header("Location: " . $redirect_page);
    exit;
}

// Get user by username or email
$stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Password correct, set session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['success'] = "Login successful!";
        header("Location: ../dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = "Invalid password.";
        header("Location: " . $redirect_page);
        exit;
    }
} else {
    $_SESSION['error'] = "User not found.";
    header("Location: " . $redirect_page);
    exit;
}