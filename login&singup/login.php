<?php

session_start();
include("db.php");
$errors=[];

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
    if($user_data=$conn->query($sql)){
        if($user_data->num_rows > 0){
            $_SESSION['user_logged']=true;
            header("Location:../home/home.php");
            exit;
            //success login
        }else{
            $errors[]="Recheck Email & Password";
        }
    }else{
        $errors[]="Loging Failed";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../login&singup/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <div class="hero">
            <div class="navbar">
                <a href="../main/main.php"><img src="../image/logo.png" class="logo"></a>
                <a href="../login&singup/sign up.php"><button type="button">Sign Up</button></a>
                
            </div>

    </div>
    
    <div class="login-box">
        <form action="" method="POST">
        <h1>Login</h1>
        <?php
                if (!empty($errors)) {
                    foreach ($errors as $key => $value) {
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                <?php
                    }
                }
                ?>
    
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="email" placeholder="Email" required>
        </div>
        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn" name="login" type="submit">Log In</button>

        <div class="textbox sig" >
            New user ? <a href="../login&singup/sign up.php"> Sign up</a>
        </div>
        </form>
    </div>


</body>
</html>