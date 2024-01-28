<?php
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="store.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Xbox Games</title>
</head>
<body>
<div class="header">
<div class="container">
    <div class="navbar">
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
        <img src="menu.png" class="menu-icon" onclick="menutoggle()"> -->
    </div>
</div>
</div>

<!----xbox products------>
    <div class="container2">
        <h2 class="title">XBOX GAMES</h2>
        <div class="row" id="product_list"> 
            
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
                    <a href="residentevil7.php"><img src="https://images-na.ssl-images-amazon.com/images/I/91ax40t%2B4DL._SL1500_.jpg"></a>
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
                    <li>Rehan Riaz7</li>
                    <li>Naqeeb Nizar</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright</p>
    </div>
</div>
<script>
    var settings = {
        "url": "http://127.0.0.1:5500/xbox.XML",
        "method": "GET",
        "timeout": 0,
        };

        $.ajax(settings).done(function (response) {
        
            var children = response.getElementsByTagName("gamelist")[0].children
            var temp = ""
            for (var i = 0; i < children.length; i++) {
                var tableChild = children[i];
                console.log(tableChild.getElementsByTagName("name")[0].childNodes[0].nodeValue)
                temp+='<div class="col-4">\
                    <img src='+tableChild.getElementsByTagName("img")[0].childNodes[0].nodeValue+'>\
                    <h4>'+tableChild.getElementsByTagName("name")[0].childNodes[0].nodeValue+'</h4>\
                    <div class="rating">\
                    <i class="fa fa-star"></i>\
                    <i class="fa fa-star"></i>\
                    <i class="fa fa-star"></i>\
                    <i class="fa fa-star"></i>\
                    <i class="fa fa-star-o"></i>\
                    </div>\
                    <p>'+tableChild.getElementsByTagName("price")[0].childNodes[0].nodeValue+'</p>\
                    </div>'
            }
        document.getElementById('product_list').innerHTML=temp;  
    });
</script>
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