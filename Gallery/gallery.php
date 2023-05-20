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
    <title>Gallery</title>
    <link rel="stylesheet" href="../Gallery/gallery.css">
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
                    <li><a href="#">Gallery</a></li>
                    <li><a href="../Contact/contact.php">Contact Us</a></li>
                    <li><a href="../main/main.php">Logout</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>

        </nav>

        <h1>Gallery</h1>
        <p>Explore the exquisite beauty captured in still photographs</p>

       
    </section>
    
    <section>

        <div class="full-img" id="fullimgbox">
            <img src="../image/img 1.jpg" id="fullimg">
            <span onclick="closefullimg()">X</span>
        </div>

        <div class="img-gallery">

            <img src="../image/img 1.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 2.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 3.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 4.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 5.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 6.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 7.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 8.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 9.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 10.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 11.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 12.jpg" onclick="openfullimg(this.src)" >
            <img src="../image/img 13.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 14.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 15.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 16.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 16.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 17.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 18.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 19.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 20.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 21.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 22.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 23.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 24.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 25.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 26.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 27.jpg" onclick="openfullimg(this.src)">
            <img src="../image/img 28.jpg" onclick="openfullimg(this.src)">



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
    <script>
        var fullimgbox = document.getElementById("fullimgbox");
        var fullimg = document.getElementById("fullimg");

        function openfullimg(pic){
            fullimgbox.style.display ="flex";
            fullimg.src = pic;

        }

        function closefullimg(){
            fullimgbox.style.display = "none"
        }


    </script>
</body>
</html>