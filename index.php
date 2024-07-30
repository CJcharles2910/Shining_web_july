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
    <title>Home Page</title>
    <link rel="stylesheet" href="index">
    <!-- <?php
        // $scriptPath = 'header.js';   //Dynamically Adding JS File
        // echo "<script src=\"$scriptPath\"></script>";
    ?> -->
</head>

<body>
    <div class="main-top" id="home">
       <?php include_once("includes/header.php");?>
    </div>
    <br><br><br><br><br><br>
    <!-- Header -->
    <!-- Body -------------------------->

    <!-- pop-up -->
    
    <?php include_once("popup.php");?>

    <!-- slideshow -->

    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="./images/home-img-1.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/home-img-2.jpg" alt="">
            </div>
            <div class="item">
                <img src="./images/home-img-3.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- Text-Content -->

    <div class="text-content">
    To share God's Love ,<br> Grace and truth so that people come to know the love,<br> and serve the Lord Jesus Christ. <br>To Live by Faith, <br>to be Known by Love,<br> and to be a Voice of Hope.
    </div>

    <!-- pastor img -->

    <div class="pastor-container">
        <div class="welcome-section">
            <img src="./images/pastor.jpeg" alt="Pastor Image">
            <div>
                <h1>Welcome To Shining Star Ministries</h1>
                <p>Dear Brothers and Sisters in Christ, we greet you in the precious name of our Lord and Saviour Jesus
                    Christ. We feel delighted to meet you through this website. We wish to make the site a blessing to
                    everyone who visits it. The site will have messages of our weekly Sunday Morning Service and of
                    other special seasons which will be of great blessings to you. We are having video messages both
                    live and recorded on our website </p>
                <p>To know further about our ministries browse through the Ministry section. You can also forward your
                    prayer requests through our "Prayer Request" section. We will surely pray for and will write back to
                    you. We encourage you to go through every section of our website and be blessed. Feel free to
                    contact us and do send in your feedback.</p>
                <p><strong>God bless you!</strong></p>
            </div>
        </div>
    </div>

    <!-- Chruch Timing -->

    <div class="container-CT">
        <div class="content">
            <h1>Church Timing</h1>
            <div class="prayer-times">
                <img src="./images/chruch_Time.png" alt="">
            </div>
            <div class="social-media">
                <a href="https://www.youtube.com/@shiningstarministriestamba6990" target="_blank">YouTube</a>
                <a href="https://www.facebook.com/ShiningStarMinistriesTambaram" target="_blank">Facebook</a>
                <a href="https://www.instagram.com/shiningstarministriestambaram/" target="_blank">Instagram</a>
            </div>
        </div>
    </div>

    <!-- YouTube iFrame -->

    <div class="i-container">
        <div class="video-gallery">
            <h2>VIDEO GALLERY</h2>
            <div class="videos">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/EHjAvQ-4evg?si=IJmk5coHRh62qSDA" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p>Title of Video</p>
                </div>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/ZlCHUiWnyhE?si=05rIJbMUdVcYE24m" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p>Title of Video</p>
                </div>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/RLprbdtVX5U?si=h_eFwubhq3rT-uKY" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p>Title of Video</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include_once('includes/footer.php');?>
    <!--//footer -->

    <script src="header.js"></script>

</body>

</html>