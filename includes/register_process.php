<?php
session_start();
require_once 'db.php';

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// Validate input
if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    $_SESSION['error'] = "Please fill in all fields.";
    header("Location: ../register_page.php");
    exit;
}

if ($password !== $confirm_password) {
    $_SESSION['error'] = "Passwords do not match.";
    header("Location: ../register_page.php");
    exit;
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Please enter a valid email address.";
    header("Location: ../register_page.php");
    exit;
}

// Validate password strength
if (strlen($password) < 6) {
    $_SESSION['error'] = "Password must be at least 6 characters long.";
    header("Location: ../register_page.php");
    exit;
}

// Check if username or email exists
$stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $_SESSION['error'] = "Username or Email already taken.";
    header("Location: ../register_page.php");
    exit;
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Insert new user into the database
$stmt = $conn->prepare("INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, NOW())");
$stmt->bind_param("sss", $username, $email, $hashed_password);
if ($stmt->execute()) {
    $_SESSION['success'] = "Registration successful. You can now log in.";
    header("Location: ../index.php");
} else {
    $_SESSION['error'] = "Registration failed. Please try again.";
    header("Location: ../register_page.php");
}

$stmt->close();
$conn->close();
?>