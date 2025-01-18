<?php 

//authorization or Access Control
if(!isset($_SESSION['user']))            ///if user session is not set
{


    //user is not login 


    //redirect login page with meassage
<<<<<<< HEAD
    $_SESSION['no-login-message'] =" <div class='error text-center'>Please login to access Admin Panalllll</div>";
    header('location:'.SITEURL.'../admin/partials/login.php');
=======
    $_SESSION['no-login-message'] =" <div class='error text-center'>Please login to access Admin Panal</div>";
    header('location:'.SITEURL.'admin/login.php');
>>>>>>> 452ec73be2a1be3302e742266ddffed6bd5d5707
}

?>
