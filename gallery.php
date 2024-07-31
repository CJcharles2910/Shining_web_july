<?php
include('includes/config.php');
session_start();
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <link rel="stylesheet" href="gallery">
</head>
<body>
    <!-- header -->
    <div class="main-top" id="home">
       <?php include_once("includes/header.php");?>
    </div>
    <!-- header end -->

    <!-- Title -->
    <h1>Gallery</h1><br><br>
    
    <!-- Images -->
    <div class="container">
        <div class="image-card">
            <img src="./images/pastor.jpeg" alt="Oikos">
            <p>Description</p>
        </div>
        <div class="image-card">
            <img src="./images/pastor.jpeg" alt="Pastor Family">
            <p>Description</p>
        </div>
        <div class="image-card">
            <img src="./images/pastor.jpeg" alt="Flooded House Renovation">
            <p>Description</p>
        </div>
        <div class="image-card">
            <img src="./images/pastor.jpeg" alt="All India Pastors Meet">
            <p>Description</p>
        </div>
        <div class="image-card">
            <img src="./images/pastor.jpeg" alt="Malaysian Team Chennai Visit">
            <p>Description</p>
        </div>
        <div class="image-card">
            <img src="./images/pastor.jpeg" alt="Flood Relief">
            <p>Description</p>
        </div>
    </div>
<!-- footer -->
    <?php include_once('includes/footer.php');?>
<!--//footer -->
</body>
</html>