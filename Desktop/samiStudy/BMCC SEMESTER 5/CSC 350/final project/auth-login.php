<?php 
session_start();
if(isset($_SESSION['admin'])){
    header("location:index.php");   
}

?>
<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-success">Welcome to Rating Portal</h5>
                                        <p>Sign in here....</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <!-- <img src="assets/images/profile-img.png" alt="" class="img-fluid"> -->
                                    <img src="assets/images/crypto/features-img/img-2.png" alt="" class="img-fluid" style="height: 120px">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <!-- <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div> -->
                            <div class="p-2">
                                <form class="form-horizontal" method ="POST">
    
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="@username">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" name="password" placeholder="@password">
                                    </div>
            
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>

                                    
                                    <div class="mt-3">
                                        <button class="btn btn-dark btn-block waves-effect waves-light" type="submit" name="submit">Log In</button>
                                    </div>
                                    
                                </form>
                            </div>
    <?php 

    include("include/db.php");

    if(isset($_POST['submit'])) 
        {
    
        $username = $_POST['username'];
        $password = $_POST['password'];
    
       

       
        $query=mysqli_query($db,"SELECT * FROM login WHERE username='$username' and password='$password' and is_active = '1'");


        
        $row=mysqli_fetch_array($query);
        $total=mysqli_num_rows($query);
        if($total > 0) 
        {                                  
            $_SESSION['admin']=$row['username'];
                   
            ?> 
            <div class="row">
               
                <div class="col-sm-12">
                    <div class="card-box">
                                                    
                        <div class="card-body">
                            <div class="alert alert-success" style="text-align: center;">
                                <strong>Well done !!!</strong> You successfully Login. . .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                
                setTimeout(function () {         
                         window.location.href = 'index.php';
                },1000); // 5 seconds
            </script>
         
            <?php
                
    
        }else
        {
            ?>
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="card-box">
                                                    
                        <div class="card-body">
                            <div class="alert alert-danger" style="text-align: center;">
                                <strong>Ohhh !!!</strong> Username or Password Wrong . . .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>
                            <div class="mt-5 text-center">
                            
                                <a href="auth-regi.php">First time User? Register Now...</a>
                            </div>
            
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>





