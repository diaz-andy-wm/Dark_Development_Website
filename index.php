<!DOCTYPE html>
<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);

}
catch(PDOException $e)
{
    echo $e->getMessage();
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dark Development - Login</title>
    <link rel="stylesheet" type="text/css" href="primary_stylesheet.css">
    <script type="text/javascript" script-name="holtwood-one-sc" src="http://use.edgefonts.net/holtwood-one-sc.js"></script>

    <!-- #  Credit for the Construction of  # -->
    <!-- #  --  this HTML PAGE goes to  --  # -->
    <!-- #  ---------  Andy Diaz  --------  # -->
</head>
<body>
<div class="signInContainer">
    <!--HEADER-->
    <header class="head">
        <h1>Dark Development</h1>
    </header>
    <!-- END HEADER-->
<div class="box">

    <div class="rightside">
    <img src="pics/sign%20in.jpg">
    </div>

    <header class="title">
    <h1>Sign-In</h1>
    </header>


<!--CONTENT DIV -->
    <div class="indexContent">
        <form id="login">
            Username:
            <input type="text" name="username" placeholder="John_Doe123" class="enjoy-css">
            <br>
            Password:
            <input type="password" name="psw" class="enjoy-css">
            <br>
            <button class="button"><a href="home.php">Log-In</a></button> <button class="button"><a href="register.php">Register</a></button>
        </form>
    </div>
<!-- END CONTENT-->
</div>
</div>
<!--FOOTER-->
<footer>
    <div class="copyright">
        <p>&copy 2015 - Dark Development,Inc. All Rights Reserved</p>
    </div>
    <div class="logo">
        <img src="pics/logo.png">
    </div>
    <div class="links">
        <a href="home.php">Home</a>
        <a href="index.php">Sign-In</a>
        <a href="aboutUs.php">About Us</a>
    </div>
</footer>
<!--END FOOTER-->
</body>
</html>