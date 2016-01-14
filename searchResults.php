<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dark Development - Search Results</title>
    <link rel="stylesheet" type="text/css" href="primary_stylesheet.css">
    <link rel="stylesheet" type="text/css" href="navStyle.css">

</head>
<body>
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
<!--###  nav end  ###-------------------------------------->
    <!--# # # # # # # # # # -->
<!--    #   CONTENT DIV   #    -------------------------------->
    <!--# # # # # # # # # # -->
<div class="content">
    <div class="searchStuff">
        <div id="searchResults">
            <br>
            <h3>showing results for: (what you typed)</h3>
            <p style="margin-left: 55px">results: 1 of 1</p>
            <br>
        </div>
    </div>
    <div class="searchStuff">

    </div>
    <!--split left and right-->
    <div class="cartStuff">
        <form>
            <input type="text" style="width: 250px; height: 32px; font-size: 25px" name="searchUser" placeholder="Search Products">
            <div class="buttonSearch">
                <a href="searchResults.php">
                    <img src="http://simpleicon.com/wp-content/uploads/active-search-256x256.png" style="width: 25px; height: 25px">
                </a>
            </div>
        </form>
    </div>
    <br>
    <div class="cartStuff" style="text-align: left">
        <br>
        <div style="margin-left: 25px">
            <h1 style="font-weight: bold">Cart: 1</h1>
            <a href="product_info.php"><p>DSLR</p></a>
            <br>
            <h3 style="font-size: 15px; text-align: right; margin-right: 25px">Total: 8.50 a day</h3>
        </div>
        <br>
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
            <a href="index.html">Sign-In</a>
            <a href="aboutUs.html">About Us</a>
        </div>
    </footer>
<!--###  footer end   ###----------------------------------------->
</body>
</html>