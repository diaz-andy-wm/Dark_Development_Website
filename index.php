<!DOCTYPE html>
<?php
require_once('connect.php');

if (isset($_POST['username']) and isset($_POST['psw']))
{

// information entered in form made into a variable
    $username = $_POST['username'];
    $password = $_POST['psw'];

// after pressing login, checking if the variables exist in the database
    if ($_POST['button'] == 'Login') {
        $query = $dbh->query("SELECT COUNT(*) FROM users WHERE username=:username AND password=:password");
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->execute();

        // Check the number of rows that match the SELECT statement
        if ($query = $dbh->fetch(PDO::FETCH_OBJ)) {
            echo "No records found";
        } else {
            header("Location: home.php");
            $_SESSION['username'] = $_POST['username'];
        }
    }
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
        <form id="login" action="index.php" method="post">
            Username:
            <input type="text" name="username" placeholder="John_Doe123" class="enjoy-css">
            <br>
            Password:
            <input type="password" name="psw" class="enjoy-css">
            <br>
            <button class="button" name="button"></button> <button class="button"><a href="register.php">Register</a></button>
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