<?php
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    // getGameData($con,1);
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="game.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Doom:Eternal | Download</title>
  <script type="text/javascript"></script>
</head>
<body>


    
<!-- HEADER -->
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
        <!-- <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png" width="30px" height="30px">
        <img src="menu.png" class="menu-icon" onclick="menutoggle()"> -->
    </div>
</div>

<!-- GAME CONTAINER-->
<div class="outter-container">
    <div class="big-box">
        <div class="left-box">
            <img style="float: left;" class="game-img" src="https://i.pinimg.com/474x/40/2a/50/402a507aaffa6bc8b0031a2d8d7ec3d9.jpg">
        </div>
        <div class="right-box">
            <h1 class="title">Doom:Eternal</h1>
            <div class="game-detail" >
                <h3 style="color:#555">
                    Price: 
                    <h3  style="float: right;color:black;">Rs. 2599</h3>
                </h3>
            </div>
            <div class="game-detail" >
                <h3 style="color:#555">
                    Developer:
                    <h3  style="float: right;color:black;"> Panic Button Games </h3>
                </h3> 
            </div>
            <div class="game-detail" >
                <h3 style="color:#555">
                    Publisher: 
                    <h3 style="float: right;color:black;"> Bethesda Softworks</h3>
                </h3>
            </div>

            <div>
            <?php
            $gameid=8;
            if(checkRecord($user_data['userid'], $gameid)) {
                echo '<button class="buy-btn" style="color:white; background-color:grey;">PURCHASED</button>';
            }
            else{
                echo '<form  method="post">
                <button type="submit" name="purchasebtn" onclick="getcreditcard()" class="buy-btn"><a style="color:white">BUY NOW</a></button>
                </form>';
            }
		
	        ?>
                
            </div>

            <?php
            $gameid=8;
            if(array_key_exists('purchasebtn', $_POST)) {
                makePurchase($user_data['userid'],$gameid,'doometernal.php');
            }
		
	        ?>
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
</body>

<script>
function getcreditcard(){
    window.prompt("Enter Credit Card # ","00000000");
}
</script>

</html>