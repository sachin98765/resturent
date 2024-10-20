
<?php

//start session
session_start();

 //create contants to store Non Repeating values

 define('SITEURL','http://localhost/RESTURENT/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','resturent_foodorder');

 $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); //Database Connection
 $db_select=mysqli_select_db($conn,database: DB_NAME) or die(mysqli_error()); //Selecting Database


?>