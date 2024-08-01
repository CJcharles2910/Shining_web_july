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
    <title>Contact us</title>
    <link rel="stylesheet" href="contact">
</head>

<body>
    <!-- header -->
    <div class="main-top" id="home">
       <?php include_once("includes/header.php");?>
    </div>
    <!-- header end -->
    <h1>Contact Us</h1><br><br>

    <div class="content">
        Dear brothers and sisters, <br><br>

        If you want to contact us to share your problems or want to know more about our ministries you can contact us at the following address/phone number/email <br> address provided. You can also use the online form at the bottom to contact us instantly. <br><br>

        Once we get your query or comments we will respond to you. <br><br>

        God bless you.
        <br><br>
    </div>

    <!-- 3 Boxes -->

    <div class="contact-container">
        <!-- Contact Address -->
        <div class="div1">
            <p style="text-decoration: underline;font-weight: bolder;padding-bottom: 10px;">Contact Address</p>
            <p>6A First floor, Tami, West,<br> Mullai Nagar Main Rd,<br> TNHB Colony, 
                Tambaram,<br> Chennai - 600045,<br> Tamil Nadu, India <br><br>
                <p>Contact Number: <br><a href="tel:+919500011109">+91-95000 11109</a></p><br><br>
                <p>Alternate Number: <br><a href="tel:+9198408 18373">+91-98408 18373</a></p>
            </p>
        </div>
        <!-- Bank Details -->
        <div class="div2">
            <p style="font-weight: bolder;padding-bottom: 10px;">If you wish to donate to the Church/Ministries, please use the below Bank details:</p>
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
        <!-- Email -->
        <div class="div3">
            <p style="text-decoration: underline;font-weight: bolder;padding-bottom: 10px;">Social Media</p>

            <p>Email: <a href="mailto:shiningstarministries2004@gmail.com">shiningstarministries</a></p><br>
            <p>Instagram: <a href="https://www.instagram.com/shiningstarministriestambaram/" target="_blank">shiningstarministries</a></p><br>

            <p>YouTube: <a href="https://www.youtube.com/@shiningstarministriestamba6990" target="_blank">shiningstarministries</a></p><br>

            <p>FaceBook: <a href="https://www.facebook.com/ShiningStarMinistriesTambaram" target="_blank">shiningstarministries</a></p>

            <p></p>
        </div>
    </div>

    <!-- Map + Message Box -->
    <div class="contact-in">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.6750761014364!2d80.09906977491764!3d12.928592987382823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525f7cdab1e00f%3A0xa3a86278f48c1182!2sSHINING%20STAR%20MINISTRIES%20(Church)!5e0!3m2!1sen!2sin!4v1720882523817!5m2!1sen!2sin"
                width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="">
                <input type="text" placeholder="Enter Your Name *" required class="contact-form-txt" />
                <input type="text" placeholder="Enter Your Email *" required class="contact-form-txt" />
                <textarea placeholder="Enter Your Message" class="contact-form-textarea"></textarea>
                <input type="submit" name="Submit" class="contact-form-btn" />
            </form>
        </div>
    </div>
    <!-- footer -->
    <?php include_once('includes/footer.php');?>
    <!--//footer -->
</body>

</html>