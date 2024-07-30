<?php
session_start();
include('includes/config.php');

// Login-Page---
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="main">
</head>
<body>
    <header>
        <div class="welcome">Shining Star Ministries</div>
        <a href="logout.php" class="logout-button">Logout</a>
    </header>
    <br><br>
    <h1>Welcome Admin</h1>
    <div class="dashboard">
        <div class="card">
            <!-- <img src="main.php" alt="img"> -->
            <!-- <h3>0</h3> -->
            <p>Monthly Promises Word</p>
            <a href="monthly-promise.php" class="view-details">View Details</a>
        </div>
        <div class="card">
            <!-- <img src="maids-icon.png" alt="img"> -->
            <!-- <h3></h3> -->
            <p>Gallery Manager</p>
            <a href="gallery-main.php" class="view-details">View Details</a>
        </div>
        <div class="card">
            <!-- <img src="request-icon.png" alt="img"> -->
            <!-- <h3>1</h3> -->
            <p>Church Timing</p>
            <a href="#" class="view-details">View Details</a>
        </div>
    </div>
</body>
</html>