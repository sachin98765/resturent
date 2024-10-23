<?php  include('../config/constant.php');    ?>


<html>
    <head>
    <title>Login--food order system</title>
    <link rel="stylesheet" href="css/admin.css">
    </head>

    <body>
        <div class="login" style="border: 1px solid red; width: 30%; margin: 5% auto; padding: 2%;" >
            <h1 style="text-align: center;" >Login</h1>  <br>

            <!-- Login from start here  -->

                <?php 
                    if(isset($_SESSION['login'])){
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                    if(isset($_SESSION['no-login-message'])){
                        echo $_SESSION['no-login-message'];
                        unset($_SESSION['no-login-message']);
                    }

                 ?>
        <br><br>

                <form action="" method="POST" class="text-center" >
                    Username:
                    <input type="text" name="username" placeholder="Enter Username"> <br><br>
                    Password:
                    <input type="password" name="password"placeholder="Enter Password"><br><br>

                    <input type="submit" name="submit" value="Login" class="btn-primary" > <br> <br>


                </form>



             <!-- login from end here -->

            <p style="text-align: center;">Created By <a href="www.sam.com">sachinMahato</a></p>
        </div>
    </body>
    
    </html>




<?php 

if(isset($_POST['submit'])){
    //process forlogin
    echo $username=$_POST['username'];
    echo $password=md5($_POST['password']);

    //sql to checkusername and paassword exist or not
    $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
    $res= mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count==1){
        $_SESSION['login']="<div class='suceess'>Login Succesful.</div>";
        $_SESSION['user']=$username;

        header('location:'.SITEURL.'admin/');
    }
    else{
        $_SESSION['login']="<div class='error text-center'>Login Details  Wrong.</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
}




?>