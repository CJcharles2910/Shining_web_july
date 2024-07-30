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
    <title>Offering Page</title>
    <link rel="stylesheet" href="offering">
</head>

<body>
    <div class="main-top" id="home">
       <?php include_once("includes/header.php");?>
    </div>
    <!-- Title -->
    <h1>Offering Page</h1><br><br>

    <!-- Img-Content -->
    <div class="offering-container">
        <div class="offering-header">
            <h2>Greetings Brothers and Sisters,</h2>
        </div>
        <div class="offering-content">
            <img src="./images/offering.jfif" alt="Image">
            <div class="text-content">
                <p>Praise the Lord. Believers who are willing to send your offering online can use any of the below options.</p>
                <p class="quote">"Just as you excel in everything-in faith, in speech, in knowledge, in complete earnestness and in your love for us-see that you also excel in this grace of giving."</p>
                <p class="quote">"Through your giving, you contribute to the expenses of the church, the relief of the poor, and the spread of the gospel through all nations. Giving generously and cheerfully is an act of worship to God."</p>
            </div>
        </div>
        <div class="offering-footer">
            <p>If you do face any problems, kindly contact me.</p>
            <p>Praise God<br>Pastor Jadesh Daniel</p>
        </div>
    </div>

    <!-- Payment -->

    <div class="container">
        <!-- UPI & Gpay -->
        <div class="div1">
            <h3>UPI & GooglePay</h3>
            <p>
                <span><img src="./images/upi.jpg" alt="UPI" width="100"> <br><br> Jadesh Daniel@icici</span>
                <br>
                <span><img src="./images/gpay.jfif" alt="GooglePay" width="100"> <br><br> +91-95000 11109</span>
                <span>Jadesh Daniel@okhdfcbank</span>
            </p>
        </div>
        <!-- Bank Details -->
        <div class="div2">
            <h3 class="heading">For Direct Bank Transfer</h3>
            <p style="font-weight: bolder;padding-bottom: 10px;">If you wish to donate to the Church/Ministries, please
                use the below Bank details:</p>
            <p>
                <strong>Name:</strong> Shining Star Ministries<br>
                <strong>Bank:</strong> ICICI<br>
                <strong>Acc No:</strong> 251005000355 (Current a/c)<br>
                <strong>Branch:</strong> Pammal, Chennai<br>
                <strong>IFSC:</strong> ICIC0002510 (RTGS & NEFT)<br>
                <strong>MICR:</strong> 600229100
            </p>
            <hr>
            <p>
                <strong>Name:</strong> Jadesh Daniel<br>
                <strong>Bank:</strong> ICICI<br>
                <strong>Acc No:</strong> 007701002902 (Savings a/c)<br>
                <strong>Branch:</strong> Pammal, Chennai<br>
                <strong>IFSC:</strong> ICIC0002510 (RTGS & NEFT)<br>
                <strong>MICR:</strong> 600229100
            </p>
        </div>
        <!-- QR Scanner -->
        <div class="div3">
            <p class="heading">QR Scanner</p>
            <p>
                <img src="./images/QR.webp" alt="UPI" width="200">
            </p>
        </div>
    </div>
     <!-- footer -->
     <?php include_once('includes/footer.php');?>
    <!--//footer -->

</body>