<?php include('partials/menu.php') ?>


            <!---------- Main content section starts--------->
           
            <div class="main-content">
                <div class="wrapper">
                     <h1>Manage Admin</h1> <br>

                              
                     <?php
                      if(isset($_SESSION['add'])){
                        echo $_SESSION['add'];    //dISPLAYING sESSION mESSAGE
                        unset($_SESSION['add']); //Removing SESSION messege 



                     }
                        if(isset($_SESSION['delete'])){
                            echo $_SESSION['delete'];
                            unset($_SESSION['delete']);
                        }
                        if(isset($_SESSION['update'])){
                            echo $_SESSION['update'];
                            unset($_SESSION['update']);
                        }

                     
                     
                     ?>
                     <br> <br><br>
                     <!---Botton to add admin---->
                     <a href="add-admin.php" class="btn-primary">Add Admin</a>
            

                     <br><br>  

                  

                     <table class="tbl-full">
                        <tr>
                            <th>Sl_No</th>
                            <th>Full_Name</th>
                            <th>User_Name</th>
                            <th>Actions</th>
                        </tr>

                        <?php 
                            //Query to get all admin
                            $sql="SELECT *FROM tbl_admin";

                            //Execute the Query
                            $res=mysqli_query($conn,$sql);

                            //Check the Query is Execute or Not
                            if($res==TRUE){
                                //Counter Rows to check eheter we have data in database or not
                                $count=mysqli_num_rows($res);     ///Functions to get all the rows in database

                                $sn=1; //create a variable Assign the value

                                //checkthe num of rowws
                                if($count>0){
                                    //we have data in 
                                    while($rows=mysqli_fetch_assoc($res)){
                                        
                                        //while to get all data from the database
                                        //And while loop will run as we have data in database

                                        //get indivisual data
                                        $id=$rows['id'];
                                        $full_name=$rows['full_name'];
                                        $username=$rows['username'];

                                        //Display our values in table
                                        ?>
                                            <tr>
                                                <td><?php echo $sn++ ?></td>
                                                <td><?php echo $full_name ?></td>
                                                <td><?php echo $username ?></td>
                                                <td>
                                                    <a href="" class="btn-primary">Change Password</a>
                                                    <a href="update-admin.php?id=<?php echo $id ?>" class="btn-secondary">Update</a>
                                                    <a href="<?php  echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete</a>

                                                </td>
                                            </tr>

                                        <?php
                                    }
                                    

                                }
                                else{
                                    //we do no have data in database
                                }                            }
                        ?>

                        
 
                     </table>
                  
                   
                    <div class="clearfix"></div>

                </div>
            </div>
            <!---------- Main content section Ends--------->

            <?php include('partials/footer.php') ?>
