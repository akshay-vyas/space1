<?php
include('dbconnect.php');
session_start();
$owner_id = $_SESSION['owner_id'];
$mobile='';
$owner_info = mysqli_query($conn,"select * from garage_owner where owner_id = '$owner_id'");
foreach ($owner_info as $info)
{
    $mobile = $info['owner_mobile'];
    # code...
}

if(isset($_POST['update']))
{
    $garage_name = $_POST['garage_name'];
    $garage_address = $_POST['garage_address'];
    $garage_city = $_POST['garage_city'];
    $garage_area = $_POST['garage_area'];
    $garage_pincode = $_POST['garage_pincode'];
    $garage_service_no = $_POST['garage_service_no'];
    $garage_sales_no = $_POST['garage_sales_no'];
    $gst_status = $_POST['gst_status'];
   

    if($gst_status == 'yes')
    {
        $gst_no = $_POST['gst_no'];
    }
    else
    {
        $gst_no = 'NA';
    }


    $gst_no = $_POST['gst_no'];
    $garage_type = $_POST['garage_type'];
    

    $garage_insert = mysqli_query($conn, "insert into garage_details values(null,'$owner_id','$garage_name','$garage_address','$garage_city','garage_area','$garage_pincode','$garage_service_no','$garage_sales_no','$gst_status','$gst_no','$garage_type','BIISMS','active')");

    $garage_update = mysqli_query($conn,"update garage_owner set owner_status = 'active'");

    header('Location:index.php');
}


?>


<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:01:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/timeline.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- fixed-top-->
    <?php
include('header.php');
    ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


<?php //include('aside.php');?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>

<!--/ Basic Horizontal Timeline -->

  <div class="content-body">
<section id="number-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Fill Your Garage Details</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="" method="post" class="number-tab-steps wizard-circle">

                            <!-- Step 1 -->
                         
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName1">Garage Name :</label>
                                            <input type="text" class="form-control" id="firstName1" name="garage_name" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName1">Address :</label>
                                            <input type="text" class="form-control" id="lastName1" name="garage_address" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress1">City :</label>
                                            <input type="text" class="form-control" id="emailAddress1" name="garage_city" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location1">Area :</label>
                                            <input type="text" class="form-control" id="emailAddress1" name="garage_area" >
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Pincode :</label>
                                            <input type="text" class="form-control" id="phoneNumber1" name="garage_pincode" >
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Service Number :</label>
                                            <input type="text" class="form-control" id="phoneNumber1" value="<?php echo $mobile;?>" name="garage_service_no" >
                                        </div>
                                    </div>

                                </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">Sales Number :</label>
                                            <input type="text" class="form-control" id="phoneNumber1" value="<?php echo $mobile;?>" name="garage_sales_no" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                     <div class="form-group">
                                            <label for="eventLocation1">Select GST Type :</label>
                                            <select class="custom-select form-control" id="eventLocation1" name="gst_status">
                                                <option value="">Select City</option>
                                                <option value="yes">YES</option>
                                                <option value="no">No</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber1">GST Number :</label>
                                            <input type="text" class="form-control" id="phoneNumber1" name="gst_no" >
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventLocation1">Select Garage Type :</label>
                                            <select class="custom-select form-control" id="eventLocation1" name="garage_type">
                                                <option value="">Select City</option>
                                                <option value="2">2</option>
                                                <option value="4">4</option>
                                                
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           
                                            <button type="submit" class="form-control btn btn-primary" name="update" value="update" id="phoneNumber1" name="gst_no" >ok </button>
                                        </div>
                                    </div>

                                    
                                </div>
                            </fieldset>

                        </form>
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

<?php
include('theme.php');

?>
    <div class="buy-now"><a href="https://goo.gl/nJZ5V1" target="_blank" class="btn bg-gradient-directional-purple white btn-purple btn-glow px-2">Buy Now</a></div>

   <?php include('footer.php'); ?>

    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:03:18 GMT -->
</html>