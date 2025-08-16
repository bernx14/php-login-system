<?php
// db.php
// This file contains the database connection logic.

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$dbHost = 'localhost'; // Or your database host
$dbUser = 'root';      // Your database username
$dbPass = '';          // Your database password
$dbName = 'user_auth'; // Your database name

// Create a new mysqli object to connect to the database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check if the connection was successful
if ($conn->connect_error) {
    // If connection fails, stop the script and display an error message.
    die("Connection failed: " . $conn->connect_error);
}

// Start a session
// Sessions are used to keep the user logged in across different pages.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
