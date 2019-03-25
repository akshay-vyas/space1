<?php
include('dbconnect.php');
include('number.php');
session_start();
$owner_id=$_SESSION['owner_id'];
$garage_id='';
$owner_info=mysqli_query($conn,"select * from garage_details where owner_id='$owner_id'");
foreach ($owner_info as $info)
 {
$garage_id=$info['garage_id'];
}
if(isset($_POST['submit']))
{
  $name = $_POST['employee_name'];
  $code = $_POST['employee_code'];
  $address = $_POST['employee_addr'];
  $country = $_POST['employee_country'];
  $state = $_POST['employee_state'];
  $city = $_POST['employee_city'];
  $email = $_POST['employee_email'];
  $mobile = $_POST['employee_mobile'];
  $Landline = $_POST['employee_landline'];
  $dob = $_POST['employee_date'];
  $empl = mysqli_query($conn,"insert into employee_details values(null,'1','$name','1','$mobile','$email','$address','$country','$state','$city','$Landline','$dob','Active')");
  /*$em = mysqli_query($conn, "select * from employee_details where employee_name = '$name' ");*/
}
      if (isset($_POST['submit1'])) 
      {
       $eid = $_POST['name-employee'];
       $desid = $_POST['designatio'];
       foreach ($desid as $desig)
      {
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
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

<!--/ Basic Horizontal Timeline -->
<form name="form-1" method="post" action="#">
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
     <fieldset class="form-group">
        <legend>Employee Information</legend>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Employee Name</label>
        <input type="text" class="form-control" name="employee_name" autofocus="" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Empolyee Code</label>
        <input type="text" class="form-control" name="employee_code" required="" style="text-transform: capitalize;" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Address</label>
        <textarea class="form-control" name="employee_addr" rows="3" required="" style="text-transform: capitalize;"></textarea>
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Country</label>
        <input type="text" class="form-control" name="employee_country" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">State</label>
        <input type="text" class="form-control" name="employee_state" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);" >
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">City</label>
        <input type="text" class="form-control" name="employee_city" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Email-Id</label>
        <input type="email" class="form-control" name="employee_email">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Mobile Number</label>
        <input type="text" class="form-control" name="employee_mobile" maxlength="10" pattern=".{10}" required="" title="Numbers only" onkeypress="return onlyNumbers(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Landline Number</label>
        <input type="text" class="form-control" name="employee_landline" title="Numbers only" onkeypress="return onlyNumbers(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Date OF Birth</label>
        <input type="Date" class="form-control" name="employee_date" >
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
    <!-- start of employee designation -->
      <div id="designation" class="container tab-pane fade"><br>
     <!--  view div -->
          <form name="form-2" method="post" action="#">
      <div>
       <div>
        <legend>Employee Designation</legend><br>

<!--         <input type="text" name="id" value="<?php echo $em['employee_id']; ;?>" >
        <input type="text" name="na" value="<?php echo $name ;?>"> -->
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Employee Name</label>
        Employee Name :  <select name="name-employee" class="form-control" required="">
        <option>Please select</option>
         <?php
         $sql = mysqli_query($conn,"select * from employee_details");
         foreach ($sql as $sql1 )
         {
          ?>
          <option style="text-transform: capitalize;" value="<?php echo $sql1['employee_id'];?>"><?php echo $sql1['employee_name'];?> </option>
        <?php 
         }
         ?> 
         <!-- <input type="text" name="employe_name" placeholder="Name of the Employee" readonly="" value="<?php echo $name ?>"> -->
         </select><br>&nbsp</fieldset>
        </div>
         <div class="form-group">
         <h5><strong>Employee Designation </strong></h5> 
         <br>&nbsp  
         <?php
         $res = mysqli_query($conn,"select * from designation_details");
         ?>
         <!-- <div class="row">
         <div class="col-xl-5 col-lg-5 col-md-12 mb-1 "> -->
          <table ><tr>
          <?php
         foreach ($res as $res1) 
         {
         // $des_id =$res1['designation_id'];
         ?>
        <td><input type="checkbox" name="designatio[]" value="<?php echo $res1['designation_id'];?>"> 
        <label for="<?php echo $res1['designation_id'];?>"><strong><?php echo $res1['designation_name'];?></strong></label></td>
          <?php
        }
        ?></tr>
        </table>
    <!-- </div>
      </div> -->
      <div class="text-right">
        <button type="submit" name="submit1" class="btn btn-success">Submit <i class="ft-thumbs-up position-right"></i></button>
      </div>
        </div>
      </div>
        
      </div>
       </div>
      </form>
    <!-- end of employee designation -->
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
                    <!-- <h4 class="card-title">Scroll - horizontal</h4> -->
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
            <div class="table-responsive">
                         <table class="table table-striped table-bordered dataex-html5-export">
              <thead>
                            <thead><tr>
                               <th>Employee Name</th>
                                    <th>Employee PhoneNumber</th>
                                    <th>Employee Address</th>
                                    <th>Employee City</th>
                                    <th>Employee Designations</th>
                                    <th>Edit</th>
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
                                     <th><input type="submit" name="edit" value="EDIT" class="btn btn-success"></th>
                                    <?php 
                                }?>
                                  </tr>
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
    <!-- ////////////////////////////////////////////////////////////////////////////-->

<?php
include('theme.php');

?>

   <?php include('footer.php'); ?>

    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.min.js"></script>
  </body>
</html>