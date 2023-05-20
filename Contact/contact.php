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
    <title>Contact US</title>
    <link rel="stylesheet" href="../Contact/contact.css">
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
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="../main/main.php">Logout</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>

        </nav>

        <h1>Contact Us</h1>
            <P>Expect a premium level of service from your first point of contact to your last moments in Sri Lanka</P>
       
    </section>

    <section  class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31686.073984335148!2d79.86264159852368!3d6.919359372619308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1628620331567!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>

<section class="contact-us">

    <div class="row">
        <div class="contact-col">
            <div>
            <i class="fa fa-home"></i>
            <span>
                <h5>Road Trip Sri Lanka Head office </h5>
                <p>Duplication Road, Colombo 03</p>
            </span>
            </div>

            <div>
            <i class="fa fa-phone"></i>
            <span>
                <h5>+94 112455893 </h5>
                <p>contact 24/7</p>
            </span>
            </div>
            <div>
            <i class="fa fa-envelope-o" ></i>
            <span>
                <h5>info@roadtripsl.com</h5>
                <p>Email us your query</p>
            </span>
            </div>
        </div>

        <div class="contact-col">

            <form action="">
                <input type="text" placeholder="Enter your name" required>

                <input type="email" placeholder="Enter your email" required>

                <input type="text" placeholder="Enter your tour type" required>
                <textarea  rows="10" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
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