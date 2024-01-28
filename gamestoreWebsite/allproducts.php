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
  <title>All Products Games</title>
  <script type="text/javascript"></script>
</head>
<body style="margin:0;">

<div class="container">
    <div class="navbar" style="background: radial-gradient(#fff,#ff6f61);">
        <div class="logo">
            <img src="icon.png">
        </div>
        <nav>
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
        <img src="menu.png" class="menu-icon" onclick="menutoggle()">
    </div> -->
</div>

<!----all products------>
    <div class="container2">
        <h2 class="title">ALL GAMES</h2>
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
            <div class="col-4">
            <a href="bloodborne.php"><img src="https://cdn.vox-cdn.com/thumbor/5cFd67BScOgPoU6H_bsheuSj-g0=/300x0/cdn0.vox-cdn.com/hermano/polygon/game/image/37464/Bloodborne_PS4_Case_front_RP_03_1402373686_1407858666.png"></a>
                <h4>Bloodborne</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.499</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            <a href="mortalkombat10.php"><img src="https://rukminim1.flixcart.com/image/612/612/jtx9evk0/physical-game/j/k/e/standard-edition-mortal-kombat-11-full-game-xbox-one-original-imaff5x5eyz5d9cb.jpeg?q=70"></a>
                <h4>Mortal Kombat 10</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.3999</p>
            </div>
            <div class="col-4">
            <a href="residentevil7.php">  <img src="https://images-na.ssl-images-amazon.com/images/I/91ax40t%2B4DL._SL1500_.jpg"></a>
                <h4>Resident Evil 7</h4>
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
            <a href="devilmaycry5.php"> <img src="https://images-na.ssl-images-amazon.com/images/I/81WV0wiR2gL._AC_SL1500_.jpg"></a>
                <h4>Devil May Cry 5</h4>
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
            <a href="doometernal.php"> <img src="https://i.pinimg.com/474x/40/2a/50/402a507aaffa6bc8b0031a2d8d7ec3d9.jpg"></a>
                <h4>Doom:Eternal</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.2599</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
            <a href="legendofzelda.php"><img src="https://static.bhphoto.com/images/images2500x2500/1484750876_1311612.jpg"></a>
                <h4>Legend of Zelda: BOTW</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.2399</p>
            </div>
            <div class="col-4">
            <a href="supermario.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_Z0WJyKrkMF_elHAcoW_2LuuV1zUo7yPR6w&usqp=CAU"></a>
                <h4>Super Mario Odyssey</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1999</p>
            </div> 
            <div class="col-4">
            <a href="fireemblem.php"> <img src="https://www.bhphotovideo.com/images/images1500x1500/nintendo_hacpanvya_fire_emblem_three_houses_1470935.jpg"></a>
                <h4>Fire Emblem:Three Houses</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.1899</p>
            </div>
            <div class="col-4">
            <a href="astralchain.php"> <img src="https://gameplanet-53f8.kxcdn.com/media/catalog/product/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/a/s/astral_chain_main_45496598365_1.jpg"></a>
                <h4>Astral Chain</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.2299</p>
            </div>
        </div>
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
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight ="200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>