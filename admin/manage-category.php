<?php include('partials/menu.php') ?>


<div class="main-content">
    <div class="wrapper">
    <h1>Manage Category</h1>
    <br><br>

    <?php 
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <br><br>

       <!---Botton to add admin---->
       <a href="add-category.php" class="btn-primary">Add Category</a>

<br><br>  
<table class="tbl-full">
   <tr>
       <th>Sl_No</th>
       <th>Full_Name</th>
       <th>User_Name</th>
       <th>Actions</th>
   </tr>
   <tr>
       <td>1.</td>
       <td>MAhato</td>
       <td>mahato12345</td>
       <td>
           <a href="#" class="btn-secondary">Update</a>
           <a href="#" class="btn-danger">Delete</a>

       </td>
   </tr>
   <tr>
       <td>1.</td>
       <td>MAhato</td>
       <td>mahato12345</td>
       <td>
           <a href="#" class="btn-secondary">Update</a>
           <a href="#" class="btn-danger">Delete</a>

       </td>
   </tr>
   <tr>
       <td>1.</td>
       <td>MAhato</td>
       <td>mahato12345</td>
       <td>
           <a href="#" class="btn-secondary">Update</a>
           <a href="#" class="btn-danger">Delete</a>

       </td>
   </tr>
</table>


    </div>
</div>

<?php include('partials/footer.php') ?>