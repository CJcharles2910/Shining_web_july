<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header">
</head>
<body>
    <!-- Active Link -->
    <?php $currentPage = basename($_SERVER['REQUEST_URI']);  ?>
    <!-- Active Link -->
     
    <!-- Header -------------------------->
<nav>
    <div class="logo">
        <a href="#"><img src="./images/logo.png" alt="Logo">
            <p>Shining Star Ministries</p>
        </a>
    </div>
    <!-- Mobile Side-Bar -->
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                    <path
                        d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                </svg></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="ministries.php">Our Ministers</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="offering.php">Offering</a></li>
        <li><a href="contact.php">Contact us</a></li>
    </ul>
    <!-- Desktop Navigation Bar -->
    <ul>
        <li class="hideOnMobile"><a href="index.php" <?php if($currentPage === "index.php"){?> class="activeLink" <?php } ?>  >Home</a></li>

        <li class="hideOnMobile"><a href="aboutus.php" <?php if($currentPage === "aboutus.php"){?> class="activeLink" <?php } ?>>About us</a></li>

        <li class="hideOnMobile"><a href="ministries.php" <?php if($currentPage === "ministries.php"){?> class="activeLink" <?php } ?>>Our Ministers</a></li>

        <li class="hideOnMobile"><a href="gallery.php" <?php if($currentPage === "gallery.php"){?> class="activeLink" <?php } ?>>Gallery</a></li>

        <li class="hideOnMobile"><a href="offering.php" <?php if($currentPage === "offering.php"){?> class="activeLink" <?php } ?>>Offering</a></li>

        <li class="hideOnMobile"><a href="contact.php" <?php if($currentPage === "contact.php"){?> class="activeLink" <?php } ?>>Contact us</a></li>

        <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg></a></li>
    </ul>
    </div>
</nav>

<script>
    //Side Bar
    function showSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex '
    }

    function hideSidebar() {
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
    }
    </script>

</body>
</html>
