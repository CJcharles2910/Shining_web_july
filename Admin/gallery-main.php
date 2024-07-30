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
    <title>Gallery Page</title>
    <link rel="stylesheet" href="main">
</head>
<body>
    <header>
        <div class="welcome">Gallery Manage</div>
        <a href="main.php" class = "Back-btn">Back</a>
    </header>
    <div class="dashboard">
        <div class="card">
            <!-- <img src="maids-icon.png" alt="img"> -->
            <!-- <h3></h3> -->
            <p>Add Photo</p>
            <a href="gallery-add.php" class="view-details">View Details</a>
        </div>
        <div class="card">
            <!-- <img src="request-icon.png" alt="img"> -->
            <!-- <h3>1</h3> -->
            <p>Manage Photo</p>
            <a href="gallery-manage.php" class="view-details">View Details</a>
        </div>
    </div>
</body>
</html>