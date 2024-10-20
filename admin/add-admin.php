<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>


        <?php
            if(isset($_SESSION['add'])){  //checking the seesion set or not
                echo $_SESSION['add'];      //Display session message
                unset($_SESSION['add']);     //removing session message
            }

        ?>


        <br><br>
        <form action="" method="post">
            <table class="tbl-30" >
                <tr>
                    <td>Full Name:</td>
                    <td> <input type="text" name="full_name" placeholder="Enter Your Name" > </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>User Name:</td>
                    <td> <input type="text" name="username" placeholder="Enter Your User Name" > </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Password:</td>
                    <td> <input type="password" name="password" placeholder="Enter Your Password" > </td>
                </tr>
                <tr></tr>
                <tr>
                    <td colspan="2" >
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary" >
                        </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php') ?>

<?php 
 //Procees the value from and Save it in Database

 if(isset($_POST['submit'])){
    //button Clicked
    // echo "Button Clicked";

    //get the data from form
   $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    // SQL Query to save the data into database
    $sql=" INSERT INTO tbl_admin SET 
        full_name='$full_name',
        username='$username',
        password='$password'

    ";

    // echo $sql;

       

    // Executing Query and Saving Data into Database
        $res=mysqli_query($conn, $sql) or die(mysqli_error());

    // check wheteher the (Query is Executed) data is inserted or not and display appropriate message
    if($res==TRUE){
            //Data Inserted
            // echo "DAta Inserted";
            // create a session Variable to Display Message
            $_SESSION['add']="<div class='success'>Admin added Successfully</div>";

            //Redirect Page to MAnage Admin
            header("location:".SITEURL.'admin/manage-admin.php');
    }
    else{
        //Failed to Insert Data
        // echo "Failed to Insert Data";
         // create a session Variable to Display Message
         $_SESSION['add']="<div class='error'>Failed to add Admin</div>";

         //Redirect Page to MAnage Admin
         header("location:".SITEURL.'admin/add-admin.php');

    }

 }




?>