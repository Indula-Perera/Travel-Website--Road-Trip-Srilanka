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
    <title>Day Tours</title>
    <link rel="stylesheet" href="../Tours/daily.css">
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

        <h1>Day Tours</h1>
        <p>Lanka Travel Plan is a customer oriented flexible service that offers the best bespoken luxury tour experience to our customers. There’s no such thing as a package tour with us as we understand that no two experiences are the same because no two requests are ever identical. The following itineraries are simply examples of the types of trips we like to run so have a read, browse by destination or by your specific need and let your wanderlust guide you through our site. And when you have an idea of what you’re looking for, be it vague or intricately specific, get in touch. We’ll do the rest.</p>
       
    </section>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/day 1.jpg">
            </div>

            <div class="about-col">
                <h1>Experience - White water rafting at Kelani river</h1>

                <p><b>Duration </b> : 03 Days 02 Nights</p>
                <p><b>Route </b> : BIA, Kithulgala, Gampola, Tangalle, BIA</p>
                <p><b>Included </b> : Transportation, Guiding, Drinks</p>
                <p><b>Not Included </b> : Entrance Fee, Hotel Fee</p>
                <p><b>Hotel </b> : Small - USD 55 to 85, Medium - 90 to 125, Star - USD 130 Upwards (Per Night + bed & breakfast)</p>
                <p><b>Price </b> :$285 (Maximum 02 Pax)</p>

                

                <a href="../Contact/contact.php" class="hero-btn red-btn">Contact for Booking</a>
            </div>
            
        </div>

    </section>

    <hr>
    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/day 2.jpg">
            </div>

            <div class="about-col">
                <h1>Experience - Wild Safari at Minneriya National Park</h1>

                <p><b>Duration </b> :  04 Days 03 Nights</p>
                <p><b>Route </b> : BIA, Minneriya National Park, Polonnaruwa, Passikudah Beach, BIA</p>
                <p><b>Included </b> : Transportation, Guiding, Drinks</p>
                <p><b>Not Included </b> : Entrance Fee, Hotel Fee</p>
                <p><b>Hotel </b> : Small - USD 55 to 85, Medium - 90 to 125, Star - USD 130 Upwards (Per Night + bed & breakfast)</p>
                <p><b>Price </b> :$355 (Maximum 02 Pax)</p>

                

                <a href="../Contact/contact.php" class="hero-btn red-btn">Contact for Booking</a>
            </div>
            
        </div>

    </section>
    <hr>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/day 3.jpg">
            </div>

            <div class="about-col">
                <h1>Experience - Ancient Anuradhapura site & Sigiriya Rock Fortress</h1>

                <p><b>Duration </b> : 05 Days 04 Nights</p>
                <p><b>Route </b> : BIA, Anuradhapura, Sigiriya Rock Fortress, Dambulla, Kandy, BIA</p>
                <p><b>Included </b> : Transportation, Guiding, Drinks</p>
                <p><b>Not Included </b> : Entrance Fee, Hotel Fee</p>
                <p><b>Hotel </b> : Small - USD 55 to 85, Medium - 90 to 125, Star - USD 130 Upwards (Per Night + bed & breakfast)</p>
                <p><b>Price </b> :$450 (Maximum 02 Pax)</p>

                

                <a href="../Contact/contact.php" class="hero-btn red-btn">Contact for Booking</a>
            </div>
            
        </div>

    </section>
    <hr>
    

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/day 4.jpg">
            </div>

            <div class="about-col">
                <h1>Experience - Wildlife, Hill country train journey, Beaches</h1>

                <p><b>Duration </b> : 07 Days 06 Nights</p>
                <p><b>Route </b> : BIA, Hikkaduwa, Galle, Udawalawa, Ella, Nuwara Eliya, Kandy, Negombo, BIA</p>
                <p><b>Included </b> : Transportation, Guiding, Drinks</p>
                <p><b>Not Included </b> : Entrance Fee, Hotel Fee</p>
                <p><b>Hotel </b> : Small - USD 55 to 85, Medium - 90 to 125, Star - USD 130 Upwards (Per Night + bed & breakfast)</p>
                <p><b>Price </b> :$600 (Maximum 02 Pax)</p>

                

                <a href="../Contact/contact.php" class="hero-btn red-btn">Contact for Booking</a>
            </div>
            
        </div>

    </section>
    <hr>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/day 5.jpg">
            </div>

            <div class="about-col">
                <h1>Experience - Pinnawala Elephant Orphanage, Sigiriya Rock Fortress, Mirissa Beach, Train Journey from Nanu-oya to Ella</h1>

                <p><b>Duration </b> : 09 Days 08 Nights</p>
                <p><b>Route </b> : BIA, Pinnawala, Sigiriya Rock Fortress, Dambulla, Kandy, Nuwara Eliya, Ella, Mirissa, BIA</p>
                <p><b>Included </b> : Transportation, Guiding, Drinks</p>
                <p><b>Not Included </b> : Entrance Fee, Hotel Fee</p>
                <p><b>Hotel </b> : Small - USD 55 to 85, Medium - 90 to 125, Star - USD 130 Upwards (Per Night + bed & breakfast)</p>
                <p><b>Price </b> :$785 (Maximum 02 Pax)</p>

                

                <a href="../Contact/contact.php" class="hero-btn red-btn">Contact for Booking</a>
            </div>
            
        </div>

    </section>
    <hr>

    <section class="about-us">
        <div class="row">

            <div class="about-col">
                <img src="../image/day6.jpg">
            </div>

            <div class="about-col">
                <h1>Experience - Pinnawala Elephant Orphanage, Sigiriya Rock Fortress, Mirissa Beach, Train Journey from Nanu-oya to Ella</h1>

                <p><b>Duration </b> : 09 Days 08 Nights</p>
                <p><b>Route </b> : BIA, Anuradhapura, Sigiriya, Kandy, Nuwara Eliya, Ella, Sinharaja, Hikkaduwa, BIA</p>
                <p><b>Included </b> : Transportation, Guiding, Drinks</p>
                <p><b>Not Included </b> : Entrance Fee, Hotel Fee</p>
                <p><b>Hotel </b> : Small - USD 55 to 85, Medium - 90 to 125, Star - USD 130 Upwards (Per Night + bed & breakfast)</p>
                <p><b>Price </b> :$860 (Maximum 02 Pax)</p>

                

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