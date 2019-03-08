<?php
include('dbconnect.php');
if(isset($_POST['submit']))
{
  $name = $_POST['emp_name'];
  $code = $_POST['emp_code'];
  $address = $_POST['emp_addr'];
  $country = $_POST['emp_country'];
  $state = $_POST['emp_state'];
  $city = $_POST['emp_city'];
  $email = $_POST['emp_email'];
  $mobile = $_POST['emp_mobno'];
  $Landline = $_POST['emp_landline'];
  $dob = $_POST['emp_date'];
  $empl = mysqli_query($conn,"insert into employee_details values(null,'1','$name','1','$mobile','$email','$address','$country','$state','$city','$Landline','$dob','Active')");
}
      if (isset($_POST['submit1'])) 
      {
       $eid = $_POST['name-emp'];
       $desid = $_POST['designatio'];
       foreach ($desid as $desig)
      {
         echo "$desig";
      $des = mysqli_query($conn,"insert into employee_designation values(null,'$eid','$desig','Active')");
    
      }
      }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Employee Details</title>
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
   <!--  Begin of data togle -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- end of data togle -->
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

<!--/ Basic Horizontal Timeline -->
<form method="post" action="#designation">
<section id="alerts-with-icons" class="mb-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Employee Details</h2>
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
      <a class="nav-link" data-toggle="tab" href="#designation">Designation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#view">View/Search</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="create" class="container tab-pane active"><br>
     <!-- create biv -->
     <fieldset>
        <legend>Employee Information</legend>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Employee Name</label><span style="color: red"> * </span>
        <input type="text" class="form-control" name="emp_name" autofocus="" required="">
        <span style="color: red" hidden="">please enter the Name</span>
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Empolyee Code</label><span style="color: red"> * </span>
        <input type="text" class="form-control" name="emp_code" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Address</label><span style="color: red"> * </span>
        <textarea class="form-control" name="emp_addr" rows="3"></textarea>
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Country</label><span style="color: red"> * </span>
        <input type="text" class="form-control" name="emp_country">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">State</label><span style="color: red"> * </span>
        <input type="text" class="form-control" name="emp_state" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">City</label><span style="color: red"> * </span>
        <input type="text" class="form-control" name="emp_city" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Email-Id</label>
        <input type="email" class="form-control" name="emp_email" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Mobile Number</label><span style="color: red"> * </span>
        <input type="text" class="form-control" name="emp_mobno" maxlength="10" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Landline Number</label>
        <input type="text" class="form-control" name="emp_landline" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Date OF Birth</label>
        <input type="Date" class="form-control" name="emp_date" >
        </fieldset>
        </div>
    </div>
        </fieldset>
         <div class="text-right">
                  <button type="submit" name="submit" class="btn btn-success">Submit <i class="ft-thumbs-up position-right"></i></button>
                  <button type="reset" name="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-right"></i></button>
                </div>
    </div>
    <!-- start of employee designation -->
      <div id="designation" class="container tab-pane fade"><br>
     <!--  view div -->
      <div>
       <div>
        <fieldset><legend>Employee Designation</legend><br>

        Employee Name : <select name="name-emp" required="">
        <option>Please select</option>
         <?php
         $sql = mysqli_query($conn,"select * from employee_details");
         foreach ($sql as $sql1 )
         {
          ?>
          <option value="<?php echo $sql1['employee_id'];?>"><?php echo $sql1['employee_name'];?> </option>
        <?php 
         }
         ?>
         </select><br>&nbsp
         <div class="form-group">
         <h5><strong>Employee Designation </strong><span style="color: red">*</span></h5> 
         <br>&nbsp  
         <?php
         $res = mysqli_query($conn,"select * from designation_details");
         foreach ($res as $res1) 
         {
          $des_id =$res1['designation_id'];
         ?>
         <div class="controls">
         <div class="skin skin-square">
         <input type="checkbox" name="designatio[]" value="<?php echo $res1['designation_id'];?>">
        <label for="<?php echo $res1['designation_id'];?>"><?php echo $res1['designation_name'];?></label>
        </div>
        </div>
          <?php
        }
        ?>
      </div>
        </fieldset>
      </div>
       </div>
        <div class="text-right">
        <button type="submit" name="submit1" class="btn btn-success">Submit <i class="ft-thumbs-up position-right"></i></button>
      </div>
    </div>
    <!-- end of employee designation -->
    <div id="view" class="container tab-pane fade"><br>
     <!--  view div -->
      <div>
        <fieldset class="form-group">
        <div>
        <label for="basicInput">view</label>
        <input type="text" class="form-control" id="basicInput" >
    </div>
        </fieldset>
        <button name="submit">submit</button>
        </div>
    </div>
 <!--  </div>-->
</div> 
        </div>
      </div>
   </form>
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