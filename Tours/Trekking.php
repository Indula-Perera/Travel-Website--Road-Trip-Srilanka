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
    <title>Trekking Tours</title>
    <link rel="stylesheet" href="../Tours/Trekking.css">
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

        <h1>Trekking Tours</h1>
       
    </section>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/trkking.jpg">
            </div>

            <div class="about-col">
                <h1>That’s the way to discover real Sri Lanka & her people</h1>

                <p>Trekking is an excellent way to not only to explore Sri Lanka but also to gain genuine insight into her people, their traditions and the culture. Trek through rice paddies, rugged terrain, wetlands, cloud forests and mountain peaks. Explore the lesser known archaeological sites. Learn the local way of life and enjoy warm native people along the way.</p>

                <p>The hill country offers some of the best terrain and scenery as the trails wind through dense forests, up steep mountains, past flowing waterfalls, between fields of tea and through clear rivers that offer a cooling dip.</p>

                <p>In addition, the paths within the Cultural Triangle offer hikers a chance to abandon the beaten track and discover little-known temples, uninhabited jungle and archaeological remains.</p>

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