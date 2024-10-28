<?php include('partials/menu.php') ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Chane Password</h1>
        <br><br>

        <?php 
            if(isset($_GET['id'])){
                $id=$_GET['id'];
            }
        
        ?>
        <from action="" method="post">
            <table>
            <tr>
                <td>Current Password:</td>
                <td>
                    <input type="password" name="current_password" placeholder="Current  Password" id="">
                </td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td>
                    <input type="password" name="new_password" placeholder="New Password" id="">
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td>Confirm Password:</td>
                <td>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" id="">
                </td>
            </tr>
            <tr></tr>
            <tr>
                
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                </td>
            </tr>
            </table>
        </from>
        
    </div>
</div>




<?php include('partials/footer.php') ?>