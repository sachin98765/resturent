<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class=""wrapper>
        <h1>Update Admin Page</h1>

        <br><br>

        <?php 
        //  1.Get the id selected admin
        $id=$_GET['id'];

        //2. crete sql query to get details
        $sql="SELECT * FROM tbl_admin WHERE id=$id ";

        //3. execute the auery
        $res=mysqli_query($conn,$sql);

        //check whether the query is executed or not
        if($res==true){
            //check whether the data is available or not
            $count=mysqli_num_rows($res);
            //check whether we have admin data or not
            if($count==1){
                //we will get the details
                // echo "Admin Available"; 
                $row=mysqli_fetch_assoc($res);

                $full_name=$row['full_name'];
                $username=$row['username'];
                


            }
            else{
                //redirect to manage admin
                header('location'.SITEURL.'admin/manage-admin.php');

            }
        }

        ?>



        <form action="" method="POST">
        <table class="tbl-30" >
                <tr>
                    <td>Full Name:</td>
                    <td> <input type="text" name="full_name" value="<?php echo $full_name; ?>" placeholder="Enter Your Name" > </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>User Name:</td>
                    <td> <input type="text" name="username" value="<?php echo  $username; ?>" placeholder="Enter Your User Name" > </td>
                </tr>
                <tr></tr>
               
                <tr></tr>
                <tr>
                    <td colspan="2" >
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="submit" value="Update Admin" class="btn-secondary" >
                        </td>
                </tr>
            </table>

        </form>
    </div>

</div>
`````````````````

<?php
//checked whether the submit button is called or not
if(isset($_POST['submit']))
{
    // echo "button clicked";  
    //GET ALL THE VALUES FROM TO UPDATE
  echo   $id=$_POST['id'];
  echo  $full_name=$_POST['full_name'];
   echo $username=$_POST['username'];


   //create sql querey to update admin
   $sql="UPDATE tbl_admin SET 
    full_name='$full_name',
    username='$username' 
    where id='$id'  ";

    //execute the query
    $res=mysqli_query($conn,$sql);

    //check the query execute succesfully or not
    if($res==true){
        //Query Executed and Admin Updated
        $_SESSION['update']="<div class='sucess'>Admin updated succesfully</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else{
        //Failed to upadate Admin
        $_SESSION['update']="<div class='error'>Admin not updated try again....... </div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    

}

?>


<?php include('partials/footer.php') ?>`