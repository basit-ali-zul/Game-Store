<?php
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="store.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>User Account</title>
  
</head>
<body>
<div class="header">
<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="icon.png">
        </div>
        <nav >
            <ul id="MenuItems">
                <li><a href="account.php">Home</a> </li>
                <li><a href="ps4games.php">Playstation</a> </li>
                <li><a href="xbox.php">Xbox</a></li>
                <li><a href="nintendo.php">Nintendo</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li style="border-left:3px inset;">Logged in as<br><a href="userinfo.php" style="font-weight:bold; font-size:25px;"><?php echo $user_data['username'] ?></a></li>
            </ul>
        </nav>
        <!-- <a href="cart.html"><img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png" width="30px" height="30px" ></a>
        <img src="menu.png" class="menu-icon" onclick="menutoggle()"> -->
    </div>
    <div class="row">
        <div class="col-2">
            <h1>Games available on all consoles!</h1>
            <p>Get the best deals for all your gaming needs and accessories.</p>
            <a href="allproducts.php" class="btn">Explore Now &#8594;</a> 
        </div>
        <div class="col-2">
            <img src="https://pyxis.nymag.com/v1/imgs/cbf/4a2/ec7456fedf57d61fc8e52cb51c3acb47dd-video-game-consoles-for-you-lede.2x.rsocial.w600.jpg">
        </div>

    </div>
</div>
</div>

<!---recommended--->
<div class="recommended">
    <div class="container2">
        <div class="row">
            <div class="items">
                <img src="https://m.media-amazon.com/images/I/51ndxZcdt+L.jpg">  
             </div>
            <div class="items">
                <img src="https://images-na.ssl-images-amazon.com/images/I/81KGsbq8ekL._SL1500_.jpg">  
            </div>
            <div class="items">
                <img src="https://images-na.ssl-images-amazon.com/images/I/91hfZvix6TL._SL1500_.jpg">  
            </div>
        </div>
    </div>
    

</div>

<!----featured products------>
    <div class="container2">
        <h2 class="title">Featured Games</h2>
        <div class="row">
            <div class="col-4">
                <a href="godofwar.php"><img src="https://m.media-amazon.com/images/I/81N142alGkL._AC_SL1500_.jpg"></a>
                <h4>God of War</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.2999</p>
            </div>
            <div class="col-4">
            <a href="uncharted4.php"><img src="https://images-na.ssl-images-amazon.com/images/I/519-jJh31XL.jpg"></a>
                <h4>Uncharted 4</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1499</p>
            </div> 
            <div class="col-4">
            <a href="horizon zero dawn.php"><img src="https://external-preview.redd.it/Y-jtYiTDnDtKwNRUeu5nSeyBYEj6gOTb4FlQGVqoinY.jpg?auto=webp&s=0b03978d24dcd52410017d3bee604a93930bba41"></a>
                <h4>Horizon Zero Dawn</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1499</p>
            </div>
	   
        </div>
        <!-- <h2 class="title">Latest Consoles</h2>
        <div class="row">
            <div class="col-4">
                <img src="https://cdn.vox-cdn.com/thumbor/Vgy3FfpWvBD32CYZrcNq6itGqnw=/1400x1400/filters:format(png)/cdn.vox-cdn.com/uploads/chorus_asset/file/20034840/ishMfuW.png">
                <h4>PS5</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.49999</p>
            </div>
            <div class="col-4">
                <img src="https://i.ytimg.com/vi/0tUqIHwHDEc/maxresdefault.jpg">
                <h4>XBOX series X</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.45999</p>
            </div> 
            <div class="col-4">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61ocH%2BFo6YL._SL1500_.jpg">
                <h4>Ninetendo Switch Lite</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.29999</p>
            </div>
        </div>
    </div>
    --Gaming Accessories------>
<!-- <div class="container2">
    <h2 class="title">Gaming Accessories</h2>
    <div class="row">
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3MIJIPb22IWUPdisd_eeO--6WSlslWS8W_A&usqp=CAU">
            <h4>Logitech Headphones</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.6999</p>
        </div>
        <div class="col-4">
            <img src="https://www.bhphotovideo.com/images/images2500x2500/sony_3004379_dualshock_4_wireless_controller_1504381.jpg">
            <h4>Dual Shock 4 Controller</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.4499</p>
        </div> 
        <div class="col-4">
            <img src="https://compass-ssl.xbox.com/assets/bd/f1/bdf1a7e3-261a-49dc-a863-0af85f145b8d.jpg?n=111101_Gallery-0_18_1350x759.jpg">
            <h4>Xbox One Controller</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.3999</p>
        </div>
    </div> --> -->
</div>

    <!----footer------>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Available on Apple App Store and Google Play</p>
                    <div class="app-logo">
                        <img src="http://assets.stickpng.com/images/5a902db97f96951c82922874.png">
                        <img src="http://assets.stickpng.com/images/5a902dbf7f96951c82922875.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/1228570/header.jpg?t=1593725286">
                    <p>Making Game delivery easy</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>About Us</li>
                        <li>Return Policy</li>
                        <li>Customer Service</li>
                        <li>Locate store near you</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>By</h3>
                    <ul>
                        <li>Basit Ali</li>
                        <li>Rehan Riaz</li>
                        <li>Naqeeb Nizar</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright</p>
        </div>
    </div>
<!-- script for menu -->
<script language="JavaScript">
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        var MenuItems = document.getElementById("MenuItems");
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";

        }
        else{
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>
</body>
</html>