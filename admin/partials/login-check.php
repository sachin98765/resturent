<?php 

//authorization or Access Control
if(!isset($_SESSION['user']))            ///if user session is not set
{


    //user is not login 


    //redirect login page with meassage
    $_SESSION['no-login-message'] =" <div class='error text-center'>Please login to access Admin Panal</div>";
    header('location:'.SITEURL.'admin/login.php');
}

?>