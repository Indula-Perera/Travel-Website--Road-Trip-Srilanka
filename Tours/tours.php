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
    <title>Tours</title>
    <link rel="stylesheet" href="../Tours/tours.css">
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
                    <li><a href="#">Tours</a></li>
                    <li><a href="../Gallery/gallery.php">Gallery</a></li>
                    <li><a href="../Contact/contact.php">Contact Us</a></li>
                    <li><a href="../main/main.php">Logout</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>

        </nav>

        <h1>Tours</h1>

       
    </section>

    <section class="tours">

            <h1>Our Amazing Tour Packages</h1>
            <p>Best of the Premium Features to Ensure You Feel Like a VIP on the go</p>

            <div class="row">
                <div class="tours-col  D">  
                   <a href="../Tours/daily.php"> <h3>Day Tours</h3></a>
                </div>

                <div class="tours-col  P">  
                <a href="../Tours/photography.php">  <h3>Photography Tours</h3></a>
                </div>

                <div class="tours-col  L">  
                <a href="../Tours/luxury.php"> <h3>Luxury Tours</h3></a>
                </div>

            </div>
            <div class="row rw-sec">
                <div class="tours-col  S">  
                <a href="../Tours/suv.php"> <h3>SUV Tours</h3></a>
                </div>

                <div class="tours-col  T">  
                <a href="../Tours/Trekking.php"> <h3>Trekking Tours</h3></a>
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