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
    <title>Our Ministries Page</title>
    <link rel="stylesheet" href="ministries">
</head>

<body>
    <!-- header -->
    <div class="main-top" id="home">
       <?php include_once("includes/header.php");?>
    </div>
    <!-- header end -->
    <!-- Title -->
    <h1>Our Ministries</h1><br><br>

    <!-- Images -->
    
    <div class="container">
        <div class="item">
            <img src="./images/about_img1.jpeg" alt="Inspire">
            <h2>Image - 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rerum distinctio molestias optio libero, fugiat odit vero amet explicabo similique doloremque autem labore architecto a praesentium, voluptate rem ut. Dignissimos repellat consectetur fuga vero sunt aperiam amet suscipit. Fugit assumenda debitis adipisci, repudiandae beatae rem rerum voluptas fugiat porro dolorem totam.</p>
        </div>
        <div class="item">
            <img src="./images/about_img1.jpeg" alt="Inspire">
            <h2>Image - 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rerum distinctio molestias optio libero, fugiat odit vero amet explicabo similique doloremque autem labore architecto a praesentium, voluptate rem ut. Dignissimos repellat consectetur fuga vero sunt aperiam amet suscipit. Fugit assumenda debitis adipisci, repudiandae beatae rem rerum voluptas fugiat porro dolorem totam.</p>
        </div>
        <div class="item">
            <img src="./images/about_img1.jpeg" alt="Inspire">
            <h2>Image - 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rerum distinctio molestias optio libero, fugiat odit vero amet explicabo similique doloremque autem labore architecto a praesentium, voluptate rem ut. Dignissimos repellat consectetur fuga vero sunt aperiam amet suscipit. Fugit assumenda debitis adipisci, repudiandae beatae rem rerum voluptas fugiat porro dolorem totam.</p>
        </div>
        <div class="item">
            <img src="./images/about_img1.jpeg" alt="Inspire">
            <h2>Image - 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rerum distinctio molestias optio libero, fugiat odit vero amet explicabo similique doloremque autem labore architecto a praesentium, voluptate rem ut. Dignissimos repellat consectetur fuga vero sunt aperiam amet suscipit. Fugit assumenda debitis adipisci, repudiandae beatae rem rerum voluptas fugiat porro dolorem totam.</p>
        </div>
        <div class="item">
            <img src="./images/about_img1.jpeg" alt="Inspire">
            <h2>Image - 5</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rerum distinctio molestias optio libero, fugiat odit vero amet explicabo similique doloremque autem labore architecto a praesentium, voluptate rem ut. Dignissimos repellat consectetur fuga vero sunt aperiam amet suscipit. Fugit assumenda debitis adipisci, repudiandae beatae rem rerum voluptas fugiat porro dolorem totam.</p>
        </div>
        <div class="item">
            <img src="./images/about_img1.jpeg" alt="Inspire">
            <h2>Image - 6</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rerum distinctio molestias optio libero, fugiat odit vero amet explicabo similique doloremque autem labore architecto a praesentium, voluptate rem ut. Dignissimos repellat consectetur fuga vero sunt aperiam amet suscipit. Fugit assumenda debitis adipisci, repudiandae beatae rem rerum voluptas fugiat porro dolorem totam.</p>
        </div>
    </div>

<!-- footer -->
<?php include_once('includes/footer.php');?>
<!--//footer -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>