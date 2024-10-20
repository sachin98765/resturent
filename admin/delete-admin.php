<?php

//Include Constant.php file here
include('../config/constant.php');


//1. get the ID of Admin to be deleted
 $id=$_GET['id'];


//2.Create SQL Query to Delete Admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//execute the query
$res=mysqli_query($conn,$sql);

//check whether the query executed successfully or not
if($res==true){
    //Querey Executed Succesfully and Admin Deleted 
    // echo "Admin Deleted";
    //Crete Session Variable to Display Message
    $_SESSION['delete']=" <div class='success'> Admin deleted Successfully. </div>";
    //Redirect to Manage admin Page
    header('location:'.SITEURL.'admin/manage-admin.php');
}
else{
    //Failed to delete
    // echo "Failed to Deleted";
    $_SESSION['delete']="<div class='error'>Failed to Delete Admin, Try Again </div> ";
    header('location:'.SITEURL.'admin/manage-admin.php');

}
//3.  redirect to manage admin page with message(success)

?>