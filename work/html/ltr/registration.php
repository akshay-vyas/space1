<?php 
include('admin/dbconnect.php');
//indu

if(isset($_POST['register']))
{
    $username=$_POST['username'];
    $usermobile=$_POST['usermobile'];
    $useremail=$_POST['useremail'];
    $userpassword=$_POST['userpassword'];
    $date = '';
    mysqli_query($conn,"insert into garage_owner values(null,'$username','$usermobile','$useremail','$userpassword','$date','garage','inactive')");
}
//akshay is 

?>



<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/register-with-bg.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 21:16:31 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register with Background Color - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/app.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/login-register.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0 pb-0">
                    <div class="card-title text-center">
                        <img src="../../app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
                    </div>
                    
                </div>
                <div class="card-content">
                   
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Email</span></p>
                    <div class="card-body pt-0">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset class="form-group floating-label-form-group">
                                <label for="user-name">User Name</label>
                                <input type="text" class="form-control" id="user-name" name="username" placeholder="User Name">
                            </fieldset>
                                <fieldset class="form-group floating-label-form-group">
                                <label for="user-name">User Mobile</label>
                                <input type="text" class="form-control" id="user-name" name="usermobile" placeholder="User Name">
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group">
                                <label for="user-email">Your Email Address</label>
                                <input type="email" class="form-control" id="user-email" name="useremail" placeholder="Your Email Address">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group mb-1">
                                <label for="user-password">Enter Password</label>
                                <input type="password" class="form-control" id="user-password" name="userpassword" placeholder="Enter Password">
                            </fieldset>
                           
                            <button type="submit" name="register" value="register" class="btn btn-outline-primary btn-block"><i class="ft-user"></i> Register</button>
                        </form>
                    </div>
                    <div class="card-body pt-0">
                        <a href="login-with-bg.html" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i> Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <script src="../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../app-assets/js/core/app.min.js"></script>
    <script src="../../app-assets/js/scripts/forms/form-login-register.min.js"></script>
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/register-with-bg.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 21:16:31 GMT -->
</html>