<?php
include('dbconnect.php');
session_start();
$owner_id=$_SESSION['owner_id'];
$garage_id='';
$owner_info=mysqli_query($conn,"select * from garage_details where owner_id='$owner_id'");
foreach ($owner_info as $info)
 {
$garage_id=$info['garage_id'];
}


$sid = $_POST['id'];
// $sql = "select * from service_details where service_id ='$sid'";
$ser=mysqli_query($conn,"select * from service_details where service_id ='$sid'");

  
if (isset($_POST['add_service']))
{
    $service_name=$_POST['service_name'];
    $labour_charge=$_POST['labour_charge'];
    $gst_percent=$_POST['gst_percent'];
    $gst_amt=$_POST['gst_amt'];
    $total_amt=$_POST['total_amt'];
   
$service_insert=mysqli_query($conn,"UPDATE service_details SET `service_name`='$service_name', `labour_charge`='$labour_charge', `gst_percentage`='$gst_percent', `gst_amt`='$gst_amt', `total_amt`='$total_amt'");

header('Location:services.php');

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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/services.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/services/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/services/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/services/css/charts/morris.css">
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


<?php include('aside.php');?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">Service Details</h4>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item active">

                                <a class="nav-link active show"  id="home-tab" data-toggle="tab" href="#create" role="tab" aria-controls="home" aria-selected="true">Edit Service</a>

                            </li>
                        </ul>


                        <div class="tab-content">
                <div class="card-content tab-pane active" id="create">
                    <div class="card-body">
                        <form method="post">
                        <div class="row">
                <?php
                

                $ser=mysqli_query($conn,"select * from service_details where service_id ='$sid'");
                foreach($ser as $doc) 
                {
                  

                ?>  
                           <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Service Name </label>
                                    <input type="text" class="form-control" id="basicInput" value="<?php echo $doc['service_name'] ?>" name="service_name" required>
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Actual Labour Charge</label>
                                    <input type="text" class="form-control" id="basicInput" value="<?php echo $doc['labour_charge'] ?>" name="labour_charge" required>
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">

                                    <label for="basicInput">GST(%)</label>
                                                        
                        <select class="form-control" id="basicInput" name="gst_percent" readonly>
                            <option value="0"<?php if ($doc['gst_percentage'] == '0') echo ' selected="selected"'; ?>>0</option>
                            <option value="5"<?php if ($doc['gst_percentage'] == '5') echo ' selected="selected"'; ?>>5</option>
                            <option value="12"<?php if ($doc['gst_percentage'] == '12') echo ' selected="selected"'; ?>>12</option>
                            <option value="18"<?php if ($doc['gst_percentage'] == '18') echo ' selected="selected"'; ?>>18</option>
                            <option value="28"<?php if ($doc['gst_percentage'] == '28') echo ' selected="selected"'; ?>>28</option>
                            
                         </select>
                                </fieldset>
                            </div>
                            <?php
               
               }
               ?> 
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">GST Amount</label>
                                    <input type="text" class="form-control" id="basicInput" value="<?php echo $doc['gst_amt'] ?>" name="gst_amt" required>
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Total Amount</label>
                                    <input type="text" class="form-control" id="basicInput" value="<?php echo $doc['total_amt'] ?>" name="total_amt" required>
                                </fieldset>
                            </div>
                            <div class="col-sm-12 mb-1">
                            <button class="btn btn-primary float-right" type="submit" name="add_service" value="add_service"> Submit</button>
                          </div>
                            
                        </div>
            
</form>
                    </div>
                </div>


                
            </div>



            </div>
        </div>
    </div>
</section>
</div>
                

<!--/ Basic Horizontal Timeline -->




        </div>
      </div>
   
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php
include('theme.php');

?>
    <div class="buy-now"><a href="https://goo.gl/nJZ5V1" target="_blank" class="btn bg-gradient-directional-purple white btn-purple btn-glow px-2">Buy Now</a></div>

   <?php include('footer.php'); ?>

    <script src="../../../app-assets/services/js/services.min.js"></script>
    <script src="../../../app-assets/services/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/services/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/services/js/extensions/unslider-min.js"></script>
    <script src="../../../app-assets/services/js/timeline/horizontal-timeline.js"></script>
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:03:18 GMT -->
</html>