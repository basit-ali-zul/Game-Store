<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gamestore";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
