<?php 

//include constant.php for SITEURL
include('../config/constant.php');  

//1.destroy  the session
session_destroy();


//redirect the page
header('location:'.SITEURL.'admin/login.php' );

?>