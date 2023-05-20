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
    <title>Home</title>
    <link rel="stylesheet" href="../home/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>

    <section class="header">
        <nav>
            <a href="../home/home.php"><img src="../image/logo.png"></a>

            <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="../about/about.php">About Us</a></li>
                    <li><a href="../Tours/tours.php">Tours</a></li>
                    <li><a href="../Gallery/gallery.php">Gallery</a></li>
                    <li><a href="../Contact/contact.php">Contact Us</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>

        </nav>

    <div class="text-box">
        <h1> Welcome to Road Trip Sri Lanka</h1>
        <P>Truly a Magnificent Luxury Travel experience</P>
        <a href="../Contact/contact.php" class="hero-btn" >Contact For A Booking</a>

    </div>

    </section>

       <!-------Our Tours -------->


    <section class="tours">

            <h1>Our Amazing Tour Packages</h1>
            <p>Best of the Premium Features to Ensure You Feel Like a VIP on the go</p>

            <div class="row">
                <div class="tours-col  D">  
                    <a href="../Tours/daily.php"><h3>Day Tours</h3></a>
                </div>

                <div class="tours-col  P">  
                <a href="../Tours/photography.php"><h3>Photography Tours</h3></a>
                </div>

                <div class="tours-col  L">  
                <a href="../Tours/luxury.php"><h3>Luxury Tours</h3></a>
                </div>


            </div>

    </section>

     <!-------Our Branches -------->
     
        <section class="branches">
            <h1>Our Branches </h1>
            <P>We are near you to plan your trip</P>
            <div class="row">
                <div class="br-col">
                    <img src="../image/kandy 1.jpg" >
                    <div class="layer">
                        <h3>
                            KANDY
                        </h3>

                    </div>

                </div>
                <div class="br-col">
                    <img src="../image/colombo.jpg" >
                    <div class="layer">
                        <h3>
                            COLOMBO
                        </h3>

                    </div>

                </div>
                <div class="br-col">
                    <img src="../image/galle.jpg" >
                    <div class="layer">
                        <h3>
                            GALLE
                        </h3>

                    </div>

                </div>
            </div>

        </section>


        <!------- Facilities  -------->

        <section class="facilities">
            <h1>Our Facilities</h1>
            <p>We Make Your Free Time Awsume  </p>

            <div class="row">
                <div class="facilities-col">
                    <img src="../image/suv.jpg">
                    <h3>SUV Traval Facility</h3>
                    <p> You will enjoy views of amazing landscapes and explore unique locations from the comfort of thr passenger seat </p>
                </div>
                <div class="facilities-col">
                    <img src="../image/marino.jpg">
                    <h3>Luxury Hotels</h3>
                    <p>Exquisite seaside resorts and spas to eclectic eco-friendly villas and boutique hotels, there are plenty of opportunities for those who revel in comfort and luxury. </p>
                </div>
                <div class="facilities-col">
                    <img src="../image/adv.jpeg">
                    <h3>World-class Adventure Experience</h3>
                    <p> We have more than 100 World-class Adventures</p>
                </div>


            </div>

        </section>

        <!-------reviews-------->
        <section class="reviews">
             <h1>What Our Customers Says </h1>
                <p>See what they say about our services </p>
                <div class="row">

            <div class="reviews-col">
                    <img src="../image/Women.jpg" >
                    <div>
                        <p>If i visit Lanka again i would choose only Dushan as my guide and now my friend. He made our trip perfect. He was extremely helpful, kind about everything: accomodation, food, tickets, interesting spots and what not. He showed us the places you can`t find by yourself. So thank you Dushan for that! Thank you Super Platy :) Alex, Anja & Tanja</p>
                        <h3>Alexandra Berkley </h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>


                    </div>
                 </div>

                 <div class="reviews-col">
                    <img src="../image/man.jpg" >
                    <div>
                        <p>Sri Lanka is a wonderful place, but it's much better if Dushan is your guide. We spent a 5-day tour with my wife, and thanks to Dushan we could enjoy not only the wonderful nature, but also the culture, the food and local aspects. He was always ready to follow us and help in our wishes and needs. I would definitely recommend a Road trip Sri Lanka if you visit this country</p>
                        <h3>Roman Poletaev </h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        
                    </div>
                 </div>
                 
                
            </div>
        </section>


        <!---- contact ----->


        <section class="cta">
            <h1>Expect a premium level of service from your first point of <br>contact to your last moments in Sri Lanka.</h1>
            <a href="../Contact/contact.php" class="hero-btn">CONTACT US </a>
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