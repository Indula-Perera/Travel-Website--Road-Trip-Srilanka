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
    <title>Luxury  Tours</title>
    <link rel="stylesheet" href="../Tours/luxury.css">
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

        <h1>Luxury  Tours</h1>
       
    </section>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/Luxurytp.jpg">
            </div>

            <div class="about-col">
                <h1>Luxury Tours</h1>

                <p>At Lanka Travel Plan, we provide personalized luxury travel to the well sought after as well as lesser known fascinating destinations around Sri Lanka. All tours are conducted from the privacy of a luxury SUV. We do the driving while you do the sightseeing!</p>

                <p>Sri Lanka is home to many luxury experiences for the discerning travelers. From exquisite seaside resorts and spas to eclectic eco-friendly villas and boutique hotels, there are plenty of opportunities for those who revel in comfort and luxury.</p>

                <p>As a seasoned, highly competent luxury tour operator in Sri Lanka, we’re here to provide you with an outstanding tour experience and advice to make your trip to this paradise island truly an unforgettable one. Let us plan your dream tour for you while you’re staying in one of the star class restaurants enjoying the luxury lifestyle and we will send you home with beautiful photographs of your trip!</p>

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