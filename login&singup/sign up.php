<?php

include("db.php");

$error = [];
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($name != "") {
        if (strlen($name) > 4) {
            if (strlen($password) > 6) {
                if ($password == $c_password) {
                    $password = md5($password);
                    $sql = "INSERT INTO users (name,email,password) VALUES ('" . $name . "','" . $email . "','" . $password . "')";
                    if ($conn->query($sql)) {
                        $success = true;
                    } else {
                        $error[] = "Server Error";
                    }
                } else {
                    $error[] = "Password not matched";
                }
            } else {
                $error[] = "Password too short";
            }
        } else {
            $error[] = "Invalid Name";
        }
    } else {
        $error[] = "Please type your Name";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../login&singup/sign up.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>


<body>
    <div class="hero">
        <div class="navbar">
            <a href="../main/main.php"><img src="../image/logo.png" class="logo"></a>
            <a href="../login&singup/login.php"><button type="button">Login</button></a>

        </div>

    </div>

    <div class="login-box">
        <form action="" method="POST">
            <h1>Sign Up</h1>
            <br><br><br><br><br>
            <!-- error alert -->
            <?php
                if (!empty($error)) {
                    foreach ($error as $key => $value) {
                        # code...
                ?>
                        <div class="alert"><?php echo $value; ?></div>
                    <?php
                    }
                }
                if (isset($success)) {
                    ?>
                    <div class="success">Register successfully</div>
                <?php
                }
                ?>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="name" placeholder="Username" required>
            </div>

            <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="c_password" placeholder="Re-Password" required>
            </div>

            <button class="btn" name="signup" type="submit">Sign Up</button>

            <div class="textbox sig">
                Alrady have a account ? <a href="../login&singup/login.php"> Login</a>
            </div>
        </form>
    </div>


</body>

</html>