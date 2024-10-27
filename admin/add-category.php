<?php include('partials/menu.php') ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br><br>


        <?php 
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>


        <br><br>

        <!-- Add Category form start -->
         <form action="" method="post" enctype="multipart/form-data" >

            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td><input type="file" name="image" id=""></td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes" >Yes
                        <input type="radio" name="featured" value="No" >No
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes" >Yes
                        <input type="radio" name="active" value="No" >No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary" >
                    </td>
                    
                </tr>
            </table>


         </form>
         <!-- end Category form end -->


        <?php  
            if(isset($_POST['submit'])){

                // echo "clicked";
                $title=$_POST['title'];
                if(isset($_POST['featured'])){
                    $featured=$_POST['featured'];
                }
                else{
                    $featured="No";
                }
                
                if(isset($_POST['active'])){
                    $active=$_POST['active'];
                }
                else{
                    $active="No";
                }



              //check image is select or not


                $sql="INSERT INTO tbl_category SET 
                    title='$title',
                    featured='$featured',
                    active='$active'
                ";


                //execute the query and save in database
                $res=mysqli_query($conn,$sql);
                if($res==true){
                    $_SESSION['add']="<div class='success'>Category Added Succesfully.</div>";
                    header('location:'.SITEURL.'admin/manage-category.php');
                }
                else{
                    $_SESSION['add']="<div class='error'>Failed to add Category</div>";
                    header('location:'.SITEURL.'admin/add-category.php');
                }
            }
        ?>


    </div>
</div>

<?php include('partials/footer.php') ?>