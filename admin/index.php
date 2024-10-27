

<html>
    <head> 
        <title>Food Order Website Home Page</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
            <!---------- Menu section starts--------->


            <?php include('partials/menu.php') ?>


            <!---------- Menu section Ends--------->

            <!---------- Main content section starts--------->
           
            <div class="main-content">
                <div class="wrapper">
                     <h1>DASHBORD</h1>
                     <br><br>
                     <?php 
                    if(isset($_SESSION['login'])){
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                 ?><br><br>

                     <div class="col-4 text-center">
                        <h1>5</h1>
                        <br>
                        Categories
                     </div>
                     <div class="col-4 text-center">
                        <h1>5</h1>
                        <br>
                        Categories
                     </div>
                     <div class="col-4 text-center">
                        <h1>5</h1>
                        <br>
                        Categories
                     </div>
                     <div class="col-4 text-center">
                        <h1>5</h1>
                        <br>
                        Categories
                     </div>
                  
                   
                    <div class="clearfix"></div>

                </div>
            </div>
            <!---------- Main content section Ends--------->

            <!---------- Footer section starts--------->
            <?php include('partials/footer.php') ?>

            <!---------- Footer section Ends--------->
    </body>
</html>