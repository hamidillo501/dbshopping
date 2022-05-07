<?php

require "config/constants.php";

$servername = "localhost";
$username = "root";
$password = "";
$db = "dokonn";

// ulanishni yaratildi
$con = mysqli_connect($servername, $username, $password,$db);

// Ulanishni tekshirish 
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>