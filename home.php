<?php
// home.php
// This is a protected page for logged-in users.

require 'db.php'; // We need the session start from db.php

// Check if the user is logged in. If not, redirect to the login page.
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .welcome-container {
            margin-top: 5rem;
            padding: 3rem;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="welcome-container text-center">
                    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
                    <p class="lead">You have successfully logged in.</p>
                    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
