<?php

session_start();

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
    exit;
}

require_once 'db.php';

// Sanitize and validate input
$patient_name = trim($_POST['patientName'] ?? '');
$phone_number = trim($_POST['phoneNumber'] ?? '');
$department = trim($_POST['department'] ?? '');
$appointment_date = trim($_POST['date'] ?? '');
$appointment_time = trim($_POST['time'] ?? '');

// Validate input
if (empty($patient_name) || empty($phone_number) || empty($department) || empty($appointment_date) || empty($appointment_time)) {
    echo json_encode(["status" => "error", "message" => "All fields are required."]);
    exit;
}

// Insert appointment into database
$stmt = $conn->prepare("INSERT INTO appointments (patient_name, phone_number, department, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?)");

if (!$stmt) {
    echo json_encode(['status' => 'error', 'message' => 'Database query preparation failed: ' . $conn->error]);
    exit;
}

$stmt->bind_param("sssss", $patient_name, $phone_number, $department, $appointment_date, $appointment_time);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Appointment booked successfully."]);
} else {
    echo json_encode(["status" => "error", "message" => "Database error: " . mysqli_error($conn)]);
}

// Close the statement and connection
$stmt->close();
$conn->close();