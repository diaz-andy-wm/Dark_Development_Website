<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dark Development Website - DarkDev Social</title>
    <link rel="stylesheet" type="text/css" href="primary_stylesheet.css">
    <link rel="stylesheet" type="text/css" href="FakePic_Gal.css">
    <link rel="stylesheet" type="text/css" href="navStyle.css">

    <style>
        a:link{
            color: red;
        }
        .black_fade{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 1000%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);

        }
        .white_bg {
            display: none;
            position: absolute;
            top: 10%;
            left: 40%;
            width: 17%;
            height: 50%;
            padding: 16px;
            border: 16px solid red;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }
    </style>

</head>
<body>
    <!--# # # # # # # # # #-->
<!--    #   HEADER DIV    #   ------------------------------------>
    <!--# # # # # # # # # #-->
    <header id="topnav">
        <div class="inner">
            <div class="navLogo"><img src="pics/logo.png"> </div> <div class="name"><h1>Dark Development</h1></div>
            <nav role='navigation'>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutUs.php">About</a></li>
                    <li><a href="newProducts.php">Products</a></li>
                    <li><a href="projCommunity.php">Member Projects</a></li>
                    <li><a href="profilePage.php">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>
<!--###  nav end  ###------------------------------------------->
    <!--# # # # # # # # # # -->
<!--    #   CONTENT DIV   #    --------------------------------->
    <!--# # # # # # # # # # -->
<div id="content" style="margin-left:227px;margin-right:274px;">

    <div class="searchPPL" style="border:2px solid black;">
        <br><br><br>
        <form>
            <h2 style="font-weight: bold; font-size: 25px">Find People</h2>
<!--search bar-->            
            <input type="text" style="width: 250px; height: 32px; font-size: 25px" name="searchUser" placeholder="Search User">
            <div class="buttonSearch">
                <a href = "javascript:void(0)" onclick = "document.getElementById('searchUp').style.display='block';document.getElementById('fadeBlack').style.display='block'">
                <img src="http://simpleicon.com/wp-content/uploads/active-search-256x256.png" style="width: 25px; height: 25px">
                </a>
            </div>
        </form>
        <div id="searchUp" class="white_bg">
<!-- pop-up div here -->
            <p>Search Results...</p>
            <div style="width: 50%; text-align: left; margin-left: 50px">
                <img src="http://iconshow.me/media/images/ui/Streamline-Icon/png/512/21-bomb-bug.png" style="width:70px; height: 70px"><br>
                <p>AndyIsDaBomb</p>
            </div>

            <div style="width: 50%; text-align: left; margin-left: 50px">
                <img src="https://d13yacurqjgara.cloudfront.net/users/124355/screenshots/2199042/profile_1x.png" style="width:70px; height: 70px" onclick="clickSubsc()"><br>
                <p>GavinDaGhost</p>
            </div>
            <br><br>
            <a href = "javascript:void(0)" onclick = "document.getElementById('searchUp').style.display='none';document.getElementById('fadeBlack').style.display='none'">Close</a>
        </div>
        <div id="fadeBlack" class="black_fade"></div>
    </div>
    <br><br>
    <div class="pic-gallery" style="border:2px solid black;">
        <div class="label"><h1 style="text-align: center">Explore Projects</h1></div>
        <div class="pic-1"><h2>Pics of People</h2></div>
        <div class="pic-2"><h2>Pics of Places</h2></div>
        <div class="pic-3"><h2>Pics of Nature</h2></div>
        <div class="pic-4"><h2>Comedy Films</h2></div>
        <div class="pic-5"><h2>Action Films</h2></div>
        <div class="pic-6"><h2>Drama Films</h2></div>
        <div class="pic-7"><h2>Your Pics</h2></div>
        <div class="pic-8"><h2>Your Films</h2></div>
        <div class="pic-9"><h2>Upload</h2></div>
    </div>

</div>
<!--###  content end  ###---------------------------------------->
    <!--# # # # # # # # # #-->
<!--    #   FOOTER DIV    #   ----------------------------------->
    <!--# # # # # # # # # #-->
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
<!--###  footer end   ###----------------------------------------->

</body>
</html>