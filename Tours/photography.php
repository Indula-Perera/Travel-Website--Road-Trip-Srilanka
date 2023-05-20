<?php
session_start();
include("../login&singup/db.php");
?>
<?php
if (!isset($_SESSION['user_logged'])) {
    header('Location:../login&signup/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Tours</title>
    <link rel="stylesheet" href="../Tours/photography.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>

    <section class="sub-header">
        <nav>
            <a href="../home/home.php"><img src="../image/logo.png"></a>

            <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="../home/home.php">Home</a></li>
                    <li><a href="../about/about.php">About Us</a></li>
                    <li><a href="../Tours/tours.php">Tours</a></li>
                    <li><a href="../Gallery/gallery.php">Gallery</a></li>
                    <li><a href="../Contact/contact.php">Contact Us</a></li>
                    <li><a href="../main/main.php">Logout</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>

        </nav>

        <h1>Photography Tours</h1>
       
    </section>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/pgt.jpg">
            </div>

            <div class="about-col">
                <h1>Capture the Beauty, Splendor and Authenticity</h1>

                <p>Photography Tour is exclusively designed to bring you to the main attractions of the destination at the best times of the year for photography. Sri Lanka - the pearl of the Indian Ocean, offers the photographers the rare opportunities in capturing the best of wildlife, culture, and nature on a photograph</p>

                <p>The itineraries can cover historical sites / culture / people / nature & adventure in different locations around the island, including some of the very unconventional yet fascinating spots.</p>

                <p>We also try to include a local perspective by bringing you off the beaten track to visit various local sights. You also get the opportunity to meet and interact with other photography enthusiasts, share tips, discuss techniques and overall, learn to improve your photography</p>

                <a href="../Contact/contact.php" class="hero-btn red-btn">Contact for Booking</a>
            </div>
            
        </div>

    </section>


    <!---- footer ----->
    <section class="footer">
            <h4> About Us </h4>
            <p>Sri Lanka's Premier Luxuries Tour Operator with Unwavering  Reputation for Personalized Service<br>Truly a Magnificent Luxury Travel Experience</p>
            <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
    	    
            </div>
            <p>&copy; Road Trip Sri Lakna - 2021</p>

        </section>

    <!-------javascript for toggle menu -------->

    <script> 
        var navlinks = document.getElementById("navlinks");

        function showmenu(){
            navlinks.style.right = "0";
            
        }

        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }

    </script>
    
</body>
</html>