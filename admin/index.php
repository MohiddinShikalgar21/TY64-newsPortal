<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['username'];
    $password=md5($_POST['password']);
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword,userType FROM tbladmin WHERE (AdminUserName='$uname' && AdminPassword='$password')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{

$_SESSION['login']=$_POST['username'];
$_SESSION['utype']=$num['userType'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  }else{
echo "<script>alert('Invalid Details');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="101 + News Station Portal.">
        <meta name="author" content="xyz">


        <!-- App title -->
        <title>TY64 News Station Portal | Admin Panel</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent" style="margin-top:-15%;">

        <!-- HOME -->
        <section style="margin-top=-25%;"> 
            <div class="container m-t-50" style="margin-left:35%;margin-top:-25%;">
                <div class="row align-items-center m-t-50">
                    <div class="col-md-8 text-center" style="margin-left:30%;">
                        
                    </div>
                    <div class="col-md-4 ">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages" >
                                <div class="account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success" style="margin-left:-10%;">
                                            <span><img src="assets/images/logo.png" alt="" width="350px"></span>
                                        </a>
                                    </h2>
                                    <p style="margin-top:-5%;">Please sign-in to Your Account!</p>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content" style="margin-left=20%;">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group ">
                                            <div class="col-xs-18">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="text-right mb-2"><a href="forgot-password.php"><i class="mdi mdi-lock"></i> Forgot your password?</a></div><br>


                                        <div class="form-group">
                                            <div class="col-xs-18">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>


                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-18">
                                                <button class="btn btn-custom waves-effect waves-light btn-md w-100" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>

                                    </form>
                                <div class="text-center">
                                    <a href="../index.php"><i class="mdi mdi-home"></i> Back Home</a>
                                </div>
                            </div>
                            </div>
                            <!-- end card-box-->              

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>