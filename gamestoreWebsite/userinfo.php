<?php
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>


<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="user_info.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>

    <style>
        /*header*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lexend Mega', sans-serif;
        }

        .logo img {
            width: 200px;
            height: 150px;
        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 20px;
        }

        nav {
            flex: 1;
            text-align: right;
        }

        nav ul {
            display: inline-block;
            list-style-type: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #555;
        }

        p {
            color: #555;
        }

        .container {
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .col-2 {
            flex-basis: 50%;
            min-width: 300px;
        }

        .col-2 img {
            max-width: 100%;
            padding: 50px 0;
        }

        .col-2 h1 {
            font-size: 50px;
            line-height: 60px;
            margin: 25px 0;
        }

        .btn {
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
        }

        .btn:hover {
            background: #553636;
        }

        .header {
            background: radial-gradient(#fff, #ff6f61);
        }

        .recommended {
            margin: 70px 0;
        }

        .items {
            flex-basis: 30%;
            min-width: 250px;
            margin-bottom: 30px;
        }

        .items img {
            width: 100%;
        }

        /*body*/
        .container2 {
            max-width: 1080px;
            margin: auto;
            padding-left: 35px;
            padding-right: 35px;
        }

        .col-4 {
            flex-basis: 25%;
            padding: 10px;
            min-width: 200px;
            margin-bottom: 50px;
            transition: transform 0.5s;
        }

        .col-4 img {
            width: 100%;
        }

        .title {
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height: 60px;
            color: #555;
        }

        .title::after {
            content: '';
            background: #ff523b;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%);
        }

        h4 {
            color: #555;
            font-weight: normal;
        }

        .col-4 p {
            font-size: 14px;
        }

        .rating .fa {
            color: #ff523b;
        }

        .col-4:hover {
            transform: translate(-5px);
        }

        /*footer*/
        .footer {
            background: #000;
            color: #8a8a8a;
            font-size: 14px;
            padding: 60px 0;
        }

        .footer p {
            color: #8a8a8a;
        }

        .footer h3 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        .footer-col-1,
        .footer-col-2,
        .footer-col-3,
        .footer-col-4 {
            min-width: 250px;
            margin-bottom: 20px;
        }

        .footer-col-1 {
            flex-basis: 30%;
        }

        .footer-col-2 {
            flex: 1;
            text-align: center;
        }

        .footer-col-2 img {
            width: 180px;
            margin-bottom: 20px;
        }

        .footer-col-3,
        .footer-col-4 {
            flex-basis: 12%;
            text-align: center;
        }

        ul {
            list-style-type: none;
        }

        .app-logo {
            margin-top: 20px;
        }

        .app-logo img {
            width: 140px;
        }

        .footer hr {
            border: none;
            background: #b5b5b5;
            height: 1px;
            margin: 20px 0;
        }

        .copyright {
            text-align: center;
        }

        .menu-icon {
            width: 28px;
            margin-left: 20px;
            display: none;
            background-color: transparent;
        }

        @media only screen and (max-width: 970px) {

            nav ul {
                position: absolute;
                top: 120px;
                left: 0;
                background: transparent;
                width: 100%;
                overflow: hidden;
                transition: max-height 0.5s;
                background-color: black;
                z-index: 1;
            }

            nav ul li {
                display: block;
                margin-right: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
            }

            nav ul li a {
                color: #fff;
            }

            .menu-icon {
                display: block;
                cursor: pointer;
            }

            .cart-info p {
                display: none;
            }
        }

        /* --single product-- */

        .single-product {
            margin-top: 20px;
        }

        .single-product .col-2 img {
            padding: 0;
        }

        .single-product .col-2 {
            padding: 20px;
        }

        .single-product h4 {
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
        }

        .single-product select {
            display: block;
            padding: 20px;
            margin-top: 20px;
            /* width: 100%; */
        }

        .single-product .fa {
            color: #ff523b;
            margin-left: 10px;
        }

        /* cart */
        .cart-page {
            margin: 80px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #fff;
            background: #ff523b;
        }

        td {
            padding: 10px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td a {
            color: #ff523b;
            font-size: 12px;
        }

        td img {
            width: 90px;
            height: 100px;
            margin-right: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #ff523b;
            width: 100%;
            max-width: 400px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }

        /* login page */

        .acc-pg {
            padding: 50px 0;
            background: radial-gradient(#fff, #ff6f61);
        }

        .form-container {
            background: #fff;
            width: 300px;
            height: 400px;
            position: relative;
            text-align: center;
            padding: 20px 0;
            margin: auto;
            box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-container span {
            font-weight: bold;
            padding: 0 10px;
            color: #555;
            cursor: pointer;
            width: 100px;
            display: inline-block;
        }

        .form-btn {
            display: inline-block;
        }

        .form-container form {
            max-width: 300px;
            padding: 0 20px;
            position: absolute;
            top: 80px;
            transition: transform 1s;
        }

        form input {
            width: 100%;
            height: 30px;
            margin: 10px 0;
            padding: 0 10px;
            border: 1px solid #ccc;
        }

        form .btn {
            width: 100%;
            border: none;
            cursor: pointer;
            margin: 10px 0;
        }

        form .btn:focus {
            outline: none;
        }

        #LoginForm {
            left: -300px;
        }

        #RegForm {
            left: 0;
        }

        form a {
            font-size: 12px;
        }

        #Indicator {
            width: 100px;
            border: none;
            background: #ff523b;
            height: 3px;
            margin-top: 8px;
            transform: translate(100px);
            transition: transform 1s;
            margin-left: 50px;
        }

        .error {
            color: red;
            width: 300px;
            cursor: pointer;
            display: inline-block;

        }

        .big-box{
    background: transparent;
    margin: auto;
    width: 60%;
    height: 600px;
    border: 1px white solid;
    border-radius: 20px;
}
.left-box{
    /* background-color: rgb(255, 255, 255, 0.8); */

    /* background: blue; */
    border-radius: 20px 0px 0px 20px;
    text-align: left;
    justify-items: start;
    float: left;
    width: 50%;
    height: 100%;
}
.right-box{    
    /* background-color: rgb(255, 15, 15); */
    border-radius: 0px 20px 20px 0px;
    float:right;
    width: 50%;
    height: 100%;
    border-left: #555 3, solid;
    justify-content: center;
    justify-items: center;
    text-align: center;
    /* padding-top: 50px; */
}

.big-box label{
  padding: 10px;
  border-bottom: #555 2px solid;
}

    </style>




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
                        <li><a href="xbox.html">Xbox</a></li>
                        <li><a href="nintendo.html">Nintendo</a></li>
                        <li><a href="logout.php">Logout</a></li>
                <li style="border-left:3px inset;">Logged in as<br><a href="userinfo.php" style="font-weight:bold; font-size:25px;"><?php echo $user_data['username'] ?></a></li>
                    </ul>
                </nav>
                <!-- <a href="cart.html"><img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png"
                        width="30px" height="30px"></a>
                <img src="menu.png" class="menu-icon" onclick="menutoggle()"> -->
            </div>
            <!-- <div class="row">
                <div class="col-2">
                    <h1>Games available on all consoles!</h1>
                    <p>Get the best deals for all your gaming needs and accessories.</p>
                    <a href="allproducts.html" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img
                        src="https://pyxis.nymag.com/v1/imgs/cbf/4a2/ec7456fedf57d61fc8e52cb51c3acb47dd-video-game-consoles-for-you-lede.2x.rsocial.w600.jpg">
                </div>

            </div> -->
        </div>
    </div>


    <!-- admin form -->
<div class="big-box" >
        <h1 class="title"><br>YOUR PROFILE</h1>
    <form>
    <div class="left-box">
    
        <label>USER ID:</label>
        <label>USER NAME:</label>
        <label>YOUR EMAIL:</label>
        <label>PHONE NUMBER:</label>
   
    </div>
    <div class="right-box">
    
        <label><?php echo $user_data['userid'] ?></label>
        <label><?php echo $user_data['username'] ?></label>
        <label><?php echo $user_data['email'] ?></label>
        <label><?php echo $user_data['phonenumber'] ?></label>
    
    </div>
    </form>
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
        function menutoggle() {
            var MenuItems = document.getElementById("MenuItems");
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";

            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>

</html>