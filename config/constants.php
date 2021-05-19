<?php 
// create start session variable
session_start();
// create constants to store none repeating values
//constant in CAPITALS and variable in small caps
//create redirect site url
define('SITEURL', 'https://localhost/all_sports_online/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'all_sports_online');

//database connection 
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
// selecting database  
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
?>
