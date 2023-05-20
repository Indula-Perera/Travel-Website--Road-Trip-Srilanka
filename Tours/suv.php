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
    <title>SUV Tours</title>
    <link rel="stylesheet" href="../Tours/suv.css">
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

        <h1>Luxury SUV Tours</h1>
       
    </section>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/suv.jpg">
            </div>

            <div class="about-col">
                <h1>Explore Sri Lanka’s Most Stunning Sites from the Comfort of a Luxury SUV</h1>

                <p>In our SUV luxury tours, you will enjoy views of amazing landscapes and explore unique locations from the comfort of the passenger seat. Along the way, we will stop in at star class luxury restaurants and places where you can enjoy the mouth watering food and drinks that match the luxury lifestyle. This is a relaxed and comfortable experience that provides you with the ideal way to explore the fascinating places around the small island.</p>

                <p>You will be guided and looked after by an experienced private tour guide who will ensure that you enjoy the every moment of this unique experience in a safe & comfortable way.</p>

                <p>We take safety precautions very seriously and only select qualified professionals with years of driving experience across multiple terrains and conditions. And all the SUV vehicles and the passengers are fully insured. Plus the basic emergency roadside assistance service is in operation to successfully handle the unforeseen circumstances with minimum hassle to the clients.</p>

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