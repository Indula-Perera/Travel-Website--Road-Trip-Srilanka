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
    <title>About</title>
    <link rel="stylesheet" href="../about/about.css">
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

        <h1>About Us</h1>
            <P>Sri Lanka's Premier Luxuries Tour Operator with Unwavering  Reputation for Personalized Service</P>
       
    </section>

    <section class="about-us ab-more">
        
            
                <p>Road Trip Sri Lanka is a luxury tour operator with a commitment to deliver seamless and authentic travel experiences with the highest level of professionalism. Founded in the year 2002, for more than 15 years, we have provided extraordinary sightseeing experiences to many visitors to Sri Lanka, allowing them to explore and experience the fascinating destinations in a new way, while indulging in the unparalleled luxuries.</p>
                
                <p>Passionate and focused on delivering the best luxury tours and vacations, we bring to you a wide range of bespoke travel services. Our luxury transportation services with high end SUVs accompanied by experienced chauffeur and private tour guide offer exclusive cruising experience around this gorgeous island to the most charming locations of your choice.</p>

                <p>Your comfort is the top priority: we will make sure that each transfer offers the best comfort and takes you to an ideal location. Our private guided tours will help you unravel the offbeat and unseen places of Sri Lanka. Our travel experts work together to ensure that you have a smooth, hassle-free personalized vacation with complete flexibility, unmatched personal attention and impeccable luxury amenities.</p>

                <p>You will experience a very enriching private escorted luxury tour with our friendly and courteous driver & private tour guides who will take you on a journey through our country’s rich history, landscape, culture, wildlife, cuisine and contemporary attractions, tailored to match your personal preferences. And during these fascinating tours, you’ll be entertained through riveting narratives, humorous stories and fascinating trivia, making your tour extraordinarily enjoyable journey that lingers in your memories for a long time.</p>

                <p>Unlike conventional tour operators, we don’t offer you just another private luxury tour. With our extensive fleet and the many options to indulge in the luxury lifestyle we offer tailored tour packages to match the discriminating tastes of you and your party. Lanka Travel Plan goes the extra mile to give you that little thing that matters most: having a choice!</p>

                            
    </section>

    <!-------Vision Mission-------->
    <section class="vision">
             
            <div class="row">

                 <div class="vision-col">
                    
                    <div>
                    <h3>Our Vision </h3>
                        <p>With our customer-focused approach, coupled with knowledgeable and innovative human power, we aspire to be the standard and the benchmark against which others are judged the success in the travel and tourism industry</p>
                                              

                    </div>
                 </div>

                 <div class="vision-col">
                    
                    <div>
                    <h3>Our Mission </h3>
                        <p>Endeavor to expand the tourism potential of Sri Lanka and strive to excel in providing optimum value travel services to the travelers who seek the luxury experience creatively blended with novelty & the adventure</p>
                        
                      
                    </div>
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