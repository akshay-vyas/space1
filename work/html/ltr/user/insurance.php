<?php
include('number.php');
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
    <title>Insurance</title>
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


<?php include('aside.php');?>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <!-- insurance starts -->
        <form name="form-1" method="post" action="#">
<section id="alerts-with-icons" class="mb-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Insurance Company</h2>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                     <!--  <div class="container mt-3">  -->
 <!--  <h4>EMPLOYEE INFORMATION</h4>
  <br> -->
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#create">Create</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#view">View/Search</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="create" class="container tab-pane active"><br>
     <!-- create biv -->
     <fieldset><br/>
        <legend>Insurance Company</legend>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Insurance Company</label>
        <input type="text" class="form-control" name="ins_comp" autofocus="" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Branch</label>
        <input type="text" class="form-control" name="ins_branch" required="" style="text-transform: capitalize;" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Address</label>
        <textarea class="form-control" name="ins_addr" rows="3" required="" style="text-transform: capitalize;"></textarea>
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Phone Number</label>
        <input type="text" class="form-control" name="ins_phno" required="" style="text-transform: capitalize;" maxlength="10" pattern=".{10}" title="Numbers only Characters should be 10" onkeypress="return onlyNumbers(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Contact Person Name</label>
        <input type="text" class="form-control" name="ins_cntperson" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Email-Id</label>
        <input type="email" class="form-control" name="ins_email">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Another Phone Number/LandLine Number</label>
        <input type="text" class="form-control" name="emp_mobno" maxlength="12" pattern=".{10,}" required="" title="Numbers only" onkeypress="return onlyNumbers(event,this);">
        </fieldset>
        </div>
    </div>
        </fieldset>
         <div class="text-right">
                  <button type="submit" name="submit" class="btn btn-success">Submit <i class="ft-thumbs-up position-right"></i></button>
                  <button type="reset" name="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                </div>
    </div>
  </form>
    
    <!-- end of insurance create -->
    <div id="view" class="container tab-pane fade"><br>
     <!--  view div -->
      <div>
         <!-- display query starts -->
       <!-- Scroll - horizontal table -->
<section id="horizontal">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Insurance View</h3>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                    <div class="card-body card-dashboard">
                        <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                            <thead>
                               <th>Insurance Company</th>
                                    <th>Branch</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Contact Person</th>
                                    <th>Email-Id</th>
                                    <th>Primary Number</th>
                                </tr>

                                
                                
                                    
                                
                                </thead><tbody>
                                  <?php 
                                   $que = mysqli_query($conn, "SELECT * FROM employee_details where garage_id ='1'");
                                foreach($que as $que1)
                                {
                                  ?>
                                
                                    <tr>
                                    <td><?php echo $que1['employee_name'] ?></td>
                                    <td><?php echo $que1['employee_mobile'] ?></td>
                                    <td><?php echo $que1['employee_address'] ?></td>
                                    <td><?php echo $que1['employee_city'] ?></td>
                                    <td> 
                                        <?php
                                    $emp_id = $que1['employee_id'];

                                    $desi_name = mysqli_query($conn,"SELECT * FROM employee_designation ed,designation_details d,employee_details e where e.employee_id = ed.employee_id AND ed.designation_id = d.designation_id AND ed.employee_id ='$emp_id' ");
                                    foreach ($desi_name as $des1)
                                    {
                                    ?>
                                    <?php echo $des1['designation_name'] ?><strong>,</strong>
                                    <?php
                                     }
                                    ?></td>
                                    <?php
                                    }?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Scroll - horizontal table -->
        </div>
    </div>
 <!--  </div>-->
</div> 
        </div>
      </div>
        <!-- insurance ends -->

        </div>
      </div>
   
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php
include('theme.php');

?>
    
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