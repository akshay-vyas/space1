<?php
include('number.php');
include('dbconnect.php');
if(isset($_POST['submit']))
{
    $companyname = $_POST['ins_comp'];
    $branch = $_POST['ins_branch'];
    $address = $_POST['ins_addr'];
    $phone = $_POST['ins_phno'];
    $contactpers = $_POST['ins_cntperson'];
    $email =$_POST['ins_email'];
    $land = $_POST['ins_land'];
    if ($land == '')
    {
        $land = "NA";
    }
    $insurance = mysqli_query($conn,"insert into insurance_company values(null,'1','$companyname','$branch','$address','$phone','$contactpers','$email','$land','Active') ");
    ?>
    <script >alert("data saved")</script>
<?php
}
 $view=mysqli_query($conn,"select * from insurance_company where garrage_id='1'") ;
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
     <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/toggle/switchery.min.css">

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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/switch.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
    <!-- switch togeel starts -->

    <!-- switch toggel ends -->
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
                    <h2 class="card-title">New Insurance</h2>
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
        <legend>Customer Details</legend>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Name</label>
        <input type="text" class="form-control" name="ins_comp" autofocus="" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Mobile Number</label>
        <input type="text" class="form-control" name="ins_phno" required="" style="text-transform: capitalize;" maxlength="10" pattern=".{10}" title="Numbers only Characters should be 10" onkeypress="return onlyNumbers(event,this);">
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
        <label for="basicInput">Email-Id</label>
        <input type="email" class="form-control" name="ins_email">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Aadhar Card Number</label>
        <input type="text" class="form-control" name="ins_aadhar" maxlength="12" pattern=".{10,}" title="Numbers only" onkeypress="return onlyNumbers(event,this);">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Pancard Number</label>
        <input type="text" class="form-control" name="ins_pan" required="" style="text-transform: capitalize;">
        </fieldset>
        </div>
        </div>
        <fieldset>
        <legend>New Insurance Policy</legend><br/>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
            <label for="basicInput">Policy Category</label>
             <fieldset class="form-group">
                 <select class="form-control" id="basicInput" name="ins_type" required="">
                    <option selected>Please Select</option>
                    <option value="1">Two Weler</option>
                    <option value="2">Three Weler</option>
                    <option value="3">Four Weler</option>
                </select>
             </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
            <label for="basicInput">Insurance Compant</label>
             <fieldset class="form-group">
                 <select class="form-control" id="basicInput" name="ins_inscompany" required="">
                    <option selected>Please Select</option>
                     <?php
                     foreach ($view as $view1) 
                    {
                    ?>
                    <option value="<?php echo $view1['insurance_id'] ?>"><?php echo $view1['insurance_company_name'] ?></option>
                    <?php
                    }
                    ?>
                </select>
             </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Executive Name</label>
        <input type="text" class="form-control" name="ins_exename" required="" style="text-transform: capitalize;" title="Alphabets only" onkeypress="return onlyAlphabets(event,this);">
        </fieldset>
        </div>
         <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Regestered Vehicle Number</label>
        <input type="text" class="form-control" name="ins_vehiclenumber" autofocus="" required="" style="text-transform:uppercase;">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
            <label for="basicInput">OEM</label>
             <fieldset class="form-group">
                 <select class="form-control" id="basicInput" name="ins_oem" required="">
                    <option selected>Please Select</option>
                </select>
             </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
            <label for="basicInput">Model</label>
             <fieldset class="form-group">
                 <select class="form-control" id="basicInput" name="ins_model" required="">
                    <option selected>Please Select</option>
                </select>
             </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Vehicle Purchased Date</label>
        <input type="date" class="form-control" name="ins_vehicledate" required="">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Engine Number</label>
        <input type="text" class="form-control" name="ins_engine" required="" style="text-transform: capitalize;">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Chasi Number</label>
        <input type="text" class="form-control" name="ins_chasi" required="" style="text-transform: capitalize;">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Policy Number</label>
        <input type="text" class="form-control" name="ins_pan" required="" style="text-transform: capitalize;">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
            <label for="basicInput">Policy Type</label>
             <fieldset class="form-group">
                 <select class="form-control" id="basicInput" name="ins_type" required="">
                    <option selected>Please Select</option>
                    <option value="1">Bumper To Bumper</option>
                    <option value="2">Comprehensive</option>
                    <option value="3">Third Party</option>
                </select>
             </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Policy Cost</label>
        <input type="text" class="form-control" name="ins_cost" required="" onkeypress="return onlyNumbers(event,this);">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Policy Purchased Date</label>
        <input type="date" class="form-control" name="ins_dateofpurch" required="">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Policy Expire Date</label>
        <input type="date" class="form-control" name="ins_expdate" required="">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <div class="card-content">
          <div class="card-body">
             <label for="basicInput">Renewel</label>
            <fieldset>
              <div class="float-left">
                <input type="checkbox" class="switch" id="switch3" data-switch-always checked/>
              </div>
            </fieldset>
          </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Renewel Amount</label>
        <input type="text" class="form-control" name="ins_cost" required="" onkeypress="return onlyNumbers(event,this);" id="renival">
        </fieldset>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
        <fieldset class="form-group">
        <label for="basicInput">Renewel Date</label>
        <input type="date" class="form-control" name="ins_cost" id="renival">
        </fieldset>
        </div>
        

    </div>
         <div class="text-right">
                  <button type="submit" name="submit" class="btn btn-success">Submit <i class="ft-thumbs-up position-right"></i></button>
                  <button type="reset" name="reset" class="btn btn-warning" >Reset <i class="ft-refresh-cw position-right"></i></button>
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
                                <tr>
                                    <th>Insurance Company</th>
                                    <th>Branch</th>
                                    <th>Address</th>
                                    <th>Phone Number</th>
                                    <th>Contact Person</th>
                                    <th>Email-Id</th>
                                    <th>Primary Number</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($view as $view1) 
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $view1['insurance_company_name'] ?></td>
                                        <td><?php echo $view1['insurance_branch'] ?></td>
                                        <td><?php echo $view1['insurance_address'] ?></td>
                                        <td><?php echo $view1['insurance_phonenumber'] ?></td>
                                        <td><?php echo $view1['insurance_contactperson'] ?></td>
                                        <td><?php echo $view1['insurance_eid'] ?></td>
                                        <td><?php echo $view1['insurance_landline'] ?></td>
                                        <td><input type="submit" name="edit" value="EDIT" class="btn btn-success"></td>
                                    </tr>
                                    <?php   
                                    }
                                    ?>   
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
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <script src="../../../app-assets/js/scripts/forms/switch.min.js"></script>
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:03:18 GMT -->
</html>