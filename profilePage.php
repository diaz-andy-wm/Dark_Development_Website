<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dark Development Website - My Profile</title>
    <link rel="stylesheet" type="text/css" href="primary_stylesheet.css">
    <link rel="stylesheet" type="text/css" href="navStyle.css">
    <script src="navScript.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style>
        a:link{
            color: red;
        }
        .black_overlay{
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
        .white_content {
            display: none;
            position: absolute;
            top: 10%;
            left: 25%;
            width: 50%;
            height: 50%;
            padding: 16px;
            border: 16px solid red;
            background-color: white;
            z-index:1002;
            overflow: auto;
        }
    </style>

<<<<<<< HEAD

=======
>>>>>>> origin/andy
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
<!--###  nav end  ###-------------------------------------->
    <!--# # # # # # # # # # -->
<!--    #   CONTENT DIV   #    --------------------------------->
    <!--# # # # # # # # # # -->
<div class="content">

    <div class="yourPosts">
        <div class="yourPostedPics">
            <h3 style="color: red; font-weight: bold;">Pictures</h3>
            <div class="profPics" style="background-image: url(https://s-media-cache-ak0.pinimg.com/236x/3a/ee/bd/3aeebdb0b0208a128d7bb002a6f0f0f4.jpg)"><h2>Random album</h2></div>
            <div class="profPics" style="background-image: url(http://assets.papernstitchblog.com.s3.amazonaws.com/wp-content/uploads/2010/09/il_fullxfull.162092197.jpg)"><h2>School album</h2></div>
            <div class="profPics" style="background-image: url(http://traveltips.usatoday.com/DM-Resize/photos.demandstudios.com/getty/article/171/208/55845126_XS.jpg?w=560&h=560&keep_ratio=1&webp=1)"><h2>Italy Trip album</h2></div>
            <div class="profPics" style="background-image: url(http://thesmashable.com/wp-content/uploads/2012/11/Natural_Wallpaper_for_iPhone_Backgrounds_iPhone_5_Pictures_Wallpapers_and_Backgrounds-15.jpg)"><h2>nature pics album</h2></div>
            <div class="profPics2" style="background-image: url(http://images2.fanpop.com/image/photos/13400000/the-new-justin-bieber-funny-pugs-13451940-377-500.jpg)"><h2>Mikey album</h2></div>
            <div class="profPics2" style="background-image: url(http://images.fineartamerica.com/images-medium-large-5/summer-beach-sunset-paul-lemon.jpg)"><h2>Summer album</h2></div>
            <div class="profPics2" style="background-image: url(http://vwhatsappstatus.com/wp-content/uploads/2015/04/Best-Friendship-Forever-Status-For-Whatsapp-DP-1.jpg?189db0)"><h2>Besties album</h2></div>
            <div class="profPics2" style="background-image: url(http://netdna.webdesignerdepot.com/uploads/2015/01/wd_quote_0069.jpg)"><h2>Nice Quotes album</h2></div>
        </div>
        <div class="yourPostedVids">
            <h3 style="color: red; font-weight: bold;">Videos</h3>
            <div class="urVid" style="background-image: url(http://performingartsschools.com/uploads/digital_asset/file/864/acting-schools-actress_600x315.jpg)"><h2>Robber Sisters Movie</h2></div>
            <div class="urVid" style="background-image: url(http://wallpapercave.com/wp/n7yKnvi.jpg)"><h2>Zed Dead Movie</h2></div>
            <div class="urVid" style="background-image: url(http://s1.dmcdn.net/Hv8iJ/1280x720-hDR.jpg)"><h2>The Woman Movie</h2></div>
            <div class="urVid2" style="background-image: url(http://www.viral.us/wp-content/uploads/2015/11/stallion.jpg)"><h2>Stallion Movie</h2></div>
            <div class="urVid2" style="background-image: url(http://images.bwwstatic.com/columnpic7/2F14C0A87-FB0C-EA76-1068C457D1056A47.jpg)"><h2>Mr. Didley Movie</h2></div>
            <div class="urVid2" style="background-image: url(http://hivewallpaper.com/wallpaper/2015/01/street-racing-cars-wallpapers-12-free-hd-wallpaper.jpg)"><h2>Racer Movie</h2></div>
        </div>
    </div>

    <div class="makePost">
        <div class="postOptions">
            <h1 style="color: red; font-weight: bold;">Post Something!</h1>
            <div class="upSign"><h2>Upload</h2></div>
            <div class="plusSign"><h2>Make Album</h2></div>
            <div class="shareSign"><h2>Share</h2></div>
        </div>
        <div class="subs">
            <h1 style="color: red; font-weight: bold;">Subscriptions</h1>
            <div class="profileSub">
                <img src="http://iconshow.me/media/images/ui/Streamline-Icon/png/512/21-bomb-bug.png" style="width:70px; height: 70px"><br>
<!-- pop-up div here -->
        <!-- profile subs username -->
                <p><a href = "javascript:void(0)" onclick = "document.getElementById('subs1').style.display='block';document.getElementById('fade').style.display='block'">
                    AndyIsDaBomb
                </a></p>
        <!-- profile subs content -->
                <div id="subs1" class="white_content">
                    <h1 style="color: black; font-weight: bold;">AndyIsDaBomb</h1>
                    <div class="yourPostedPics">
                        <h3 style="color: red;">Recently Changed Pics</h3>
                        <div class="profPics" style="background-image: url(http://b-i.forbesimg.com/sundaysteinkirchner/files/2013/06/vacationbeach.070712.jpg)"><h2>Vacation album</h2></div>
                        <div class="profPics" style="background-image: url(https://yt3.ggpht.com/-iy7uKgxIfNk/AAAAAAAAAAI/AAAAAAAAAAA/oXwJkrhs3Fk/s900-c-k-no/photo.jpg)"><h2>Da Boyz album</h2></div>
                        <div class="profPics" style="background-image: url(http://media-cache-ec0.pinimg.com/236x/b0/8a/dc/b08adceffe5ba61660420ab53ac3074b.jpg)"><h2>Wrestling Quotes album</h2></div>
                    </div>
                    <div class="yourPostedVids">
                        <h3 style="color: red;">Recently Changed Vids</h3>
                        <div class="urVid" style="background-image: url(http://performingartsschools.com/uploads/digital_asset/file/864/acting-schools-actress_600x315.jpg)"><h2>Robber Sisters Movie</h2></div>
                        <div class="urVid" style="background-image: url(http://wallpapercave.com/wp/n7yKnvi.jpg)"><h2>Zed Dead Movie</h2></div>
                        <div class="urVid" style="background-image: url(http://s1.dmcdn.net/Hv8iJ/1280x720-hDR.jpg)"><h2>The Woman Movie</h2></div>
                    </div>
                    <a href = "javascript:void(0)" onclick = "document.getElementById('subs1').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
                </div>
                <div id="fade" class="black_overlay"></div>
            </div>
            <div class="profileSub">
                <img src="https://d13yacurqjgara.cloudfront.net/users/124355/screenshots/2199042/profile_1x.png" style="width:70px; height: 70px" onclick="clickSubsc()"><br>
<!-- pop-up div here -->
        <!-- profile subs username -->
                <p><a href = "javascript:void(0)" onclick = "document.getElementById('subs2').style.display='block';document.getElementById('fade').style.display='block'">
                    GavinDaGhost
                </a></p>
        <!-- profile subs content -->
                <div id="subs2" class="white_content">
                    <h1 style="color: black; font-weight: bold;">GavinDaGhost</h1>
                    <div class="yourPostedPics">
                        <h3 style="color: red;">Recently Changed Pics</h3>
                        <div class="profPics" style="background-image: url(http://3.bp.blogspot.com/_YkUojCCYpu8/TP6WCId2amI/AAAAAAAAAms/yhYI0wekV7w/s1600/tictacs.jpg)"><h2>Random Album</h2></div>
                        <div class="profPics" style="background-image: url(http://cdn3.volusion.com/lgadk.lckwj/v/vspfiles/photos/Fun-GhostLightToy-3.jpg?1345736697)"><h2>Ghost Album</h2></div>
                        <div class="profPics" style="background-image: url(https://bananasfordates.files.wordpress.com/2015/05/adminofficeassist.jpg)"><h2>Business Album</h2></div>
                    </div>
                    <div class="yourPostedVids">
                        <h3 style="color: red;">Recently Changed Vids</h3>
                        <div class="urVid" style="background-image: url(http://www.viral.us/wp-content/uploads/2015/11/stallion.jpg)"><h2>Stallion Movie</h2></div>
                        <div class="urVid" style="background-image: url(http://images.bwwstatic.com/columnpic7/2F14C0A87-FB0C-EA76-1068C457D1056A47.jpg)"><h2>Didley Movie</h2></div>
                        <div class="urVid" style="background-image: url(http://hivewallpaper.com/wallpaper/2015/01/street-racing-cars-wallpapers-12-free-hd-wallpaper.jpg)"><h2>Racer Movie</h2></div>
                    </div>
                    <a href = "javascript:void(0)" onclick = "document.getElementById('subs2').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
                </div>
                <div id="fade" class="black_overlay"></div>
            </div>
        </div><br><br><br><br><br><br><br><br>
        <h3>Please Note:</h3>
        <p>Functionality on this page is very limited. Please excuse the inconvenience but this page is undergoing maintenance. Thank you for your patience. (FYI the subscription names are clickable and pop-up is scrollable)</p>
    </div>

    <div class="profileInfo">
        <div class ="profileID">
            <img src="http://vignette3.wikia.nocookie.net/java/images/0/0e/Camera_icon.gif/revision/latest?cb=20090227194712" style="width:70px; height: 70px"><br>
            <p>UsernameHere</p>
            <button><a href="index.html">log out</a></button>
        </div>

        <form class="accountInfo">
            <h3 style="color: red; font-weight: bold;">Profile Information</h3>
            First Name: Mollee
            <br>
            Last Name: Marquez
            <br>
            Email: darkdevel@gmail.com
            <br>
            Birthday: April 1st, 1969
            <br>
            Address: 00000 w Santa Ln,
            <br>
            Berkley, CA 90210
            <br>
            United States
            <br>
            Cell Number: (000)000-0000
            <br>
            Credit Card Number: 0000************
            <br>
            Expiration Date: Yesterday
            <br>
            <button><a href="register.php">Change Info</a></button>
        </form>
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