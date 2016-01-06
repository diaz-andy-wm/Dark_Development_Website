<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dark Development - Search Results</title>
    <link rel="stylesheet" type="text/css" href="primary_stylesheet.css">
    <link rel="stylesheet" type="text/css" href="navStyle.css">

</head>
<body>
    <!--# # # # # # # # # # # -->
<!--    #      NAV DIV      #    ------------------------------->
    <!--# # # # # # # # # # # -->
<<<<<<< HEAD
    <div id="nav">
        
        <div id="navbar">
            <a class="NavLink" href="home.php">Home</a>
            <a class="NavLink" href="aboutUs.html">About Us</a>
            <a class="NavLink" href="newProducts.php">What's New</a>
            <a class="NavLink" href="projCommunity.php">Project Community</a>
            <a class="NavLink" href="profilePage.php">Profile</a>
        </div>
        <div id="cartStuff">
            <form><input type="text" placeholder="Search Dark Dev"><button><a href="searchResults.php">Go</a></button></form>
            <p>cart: 0</p>
        </div>
        <div id ="profileID">
            <p style="color: white">.</p>
            <img src="http://vignette3.wikia.nocookie.net/java/images/0/0e/Camera_icon.gif/revision/latest?cb=20090227194712" style="width:70px; height: 70px"><br>
            <p>UsernameHere</p>
            <button><a href="index.html">log out</a></button>
        </div>

    </div>
=======
    <header id="topnav">
        <div class="inner">
            <div class="navLogo"><img src="pics/logo.png"> </div> <div class="name"><h1>Dark Development</h1></div>
            <nav role='navigation'>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="aboutUs.html">About</a></li>
                    <li><a href="newProducts.php">Products</a></li>
                    <li><a href="projCommunity.php">Member Projects</a></li>
                    <li><a href="profilePage.php">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>
>>>>>>> origin/mollee
<!--###  nav end  ###-------------------------------------->
    <!--# # # # # # # # # # -->
<!--    #   CONTENT DIV   #    -------------------------------->
    <!--# # # # # # # # # # -->
<div class="content">
    <div id="searchResults">
        <h3>showing results for: (what you typed)</h3>
        <p>results: 1 of 1</p>
        <p>Filter:</p>
        <div id="filterList">
<!--###  Filter Table  ###-->
            <table id="filters">
                <tr>
                    <td>Prod Type</td>
                    <td>Memory Amount</td>
                    <td>Accessories</td>
                    <td>Cost</td>
                </tr>
                <tr>
                    <td>
                        <!--# Product Type #-->
                        <form>
                            <input type="checkbox" name="videoCamera">Video Camera<br>
                            <input type="checkbox" name="DSLR">DSLR<br>
                            <input type="checkbox" name="pointShoot">Point & Shoot
                        </form>
                    </td>
                    <td>
                        <!--# Memory Amount #-->
                        <form>
                            <input type="checkbox" name="1g">1 gb<br>
                            <input type="checkbox" name="2g">2 gb<br>
                            <input type="checkbox" name="8g">8 gb<br>
                            <input type="checkbox" name="16g">16 gb<br>
                            <input type="checkbox" name="32g">32 gb
                        </form>
                    </td>
                    <td>
                        <!--# Accessories #-->
                        <form>
                            <input type="checkbox" name="none">none<br>
                            <input type="checkbox" name="tripod">Tripod<br>
                            <input type="checkbox" name="exLens">Extra Lens<br>
                            <input type="checkbox" name="strap">Strap
                        </form>
                    </td>
                    <td>
                        <!--# Cost #-->
                        <form>
                            <input type="checkbox" name="0-20">0-$20 week<br>
                            <input type="checkbox" name="21-50">21-$50 week<br>
                            <input type="checkbox" name="51-100">51-$100 week<br>
                            <input type="checkbox" name="101-200">101-$200 week<br>
                            <input type="checkbox" name="200-500">200-$500 week
                        </form>
                    </td>
                </tr>
            </table>

        </div>
        <p style="color: white">.</p>
        <p>Results:</p>
        <div id="resultsList">
<!--###  Results Table  ###-->
            <table id="results">
                <tr>
                    <td>Img</td>
                    <td>Name</td>
                    <td>Prod Type</td>
                    <td>Memory Amount</td>
                    <td>Accessories</td>
                    <td>Cost</td>
                </tr>
                <tr>
                    <!--# IMG #-->
                    <td><img src="http://images.clipartpanda.com/camera-flash-silhouette-camera-md.png" style="width:60px; height: 50px"></td>
                    <!--# name #-->
                    <td>Example Cam</td>
                    <!--# Prod Type #-->
                    <td>DSLR</td>
                    <!--# Memory Amount #-->
                    <td>1 gb</td>
                    <!--# Accessories #-->
                    <td>none</td>
                    <!--# Cost #-->
                    <td>$499</td>
                </tr>
            </table>

        </div>
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