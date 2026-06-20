<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'hospital_db';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]));
}