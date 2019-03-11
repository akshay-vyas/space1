<?php
include('dbconnect.php');
session_start();
$owner_id=$_SESSION['owner_id'];
$garage_id='';
$vendor_id='';
$owner_info=mysqli_query($conn,"select * from garage_details where owner_id='$owner_id'");
foreach ($owner_info as $info)
 {
$garage_id=$info['garage_id'];
}

if (isset($_POST['add_vendor']))
{
    $vendor_company_name=$_POST['vendor_company_name'];
    $vendor_mobile=$_POST['vendor_mobile'];
    $vendor_email=$_POST['vendor_email'];
    $vendor_address=$_POST['vendor_address'];
    $vendor_landline=$_POST['vendor_landline'];
    $vendor_gst_no=$_POST['vendor_gst_no'];

    $vendor_contact_name=$_POST['vendor_contact_name'];
    $vendor_contact_mobile=$_POST['vendor_contact_mobile'];
    $vendor_contact_email=$_POST['vendor_contact_email'];
    $vendor_contact_landline=$_POST['vendor_contact_landline'];


    $vendor_insert=mysqli_query($conn,"insert into vendor_information values(null,'$garage_id','$vendor_company_name','$vendor_mobile','$vendor_email','$vendor_address','$vendor_landline','$vendor_gst_no','0')");


    $last_rec=mysqli_query($conn,"select * from vendor_information where garage_id='$garage_id' order by vendor_id  desc limit 1");

foreach($last_rec as $vendor_last_rec)
{
    $vendor_id=$vendor_last_rec['vendor_id'];
}

    $vendor_contact_insert=mysqli_query($conn,"insert into vendor_contact_information values(null,'$garage_id','$vendor_id','$vendor_contact_name','$vendor_contact_mobile','$vendor_contact_email','$vendor_contact_landline','0') ");

    // SELECT * FROM Table ORDER BY ID DESC LIMIT 1

header('Location:vendor-information.php');

}


if(isset($_POST['add_contact']))
{
    $vendor_company_name1=$_POST['vendor_company_name1'];
     $vendor_contact_name1=$_POST['vendor_contact_name1'];
    $vendor_contact_mobile1=$_POST['vendor_contact_mobile1'];
    $vendor_contact_email1=$_POST['vendor_contact_email1'];
    $vendor_contact_landline1=$_POST['vendor_contact_landline1'];
       $vendor_contact_insert1=mysqli_query($conn,"insert into vendor_contact_information values(null,'$garage_id','$vendor_company_name1','$vendor_contact_name1','$vendor_contact_mobile1','$vendor_contact_email1','$vendor_contact_landline1','0') ");


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
        <div class="content-body">
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">Vendor Information</h4>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item active">

                                <a class="nav-link active show"  id="home-tab" data-toggle="tab" href="#create" role="tab" aria-controls="home" aria-selected="true">Add Vendor</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="profile" aria-selected="false">Add Contact</a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link" id="profile-tab" onclick="veiw()" data-toggle="tab" href="#view" role="tab" aria-controls="profile" aria-selected="false">View Vendors</a>

                            </li>



                        </ul>


                        <div class="tab-content">
                <div class="card-content tab-pane active" id="create">
                    <div class="card-body">
                        <form method="post">
                        <div class="row">

                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Company Name</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_company_name">
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Mobile</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_mobile" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Email</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_email">
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Address</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_address">
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Landline</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_landline" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">GST Number</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_gst_no">
                                </fieldset>
                            </div>
                        </div>
                 <hr>           
                <div class="card-header">
                    <h4 class="card-title">Contact Information</h4>
                </div>
                <hr>
                <br>
                <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Contact Person</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_name" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Mobile</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_mobile" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Email</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_email" >
                                </fieldset>
                            </div>
                            
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Landline</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_landline" >
                                </fieldset>
                            </div>
                            <div class="col-sm-12 mb-1">
                            <button class="btn btn-primary float-right" type="submit" name="add_vendor" value="add_vendor"> Submit</button>
                          </div>



                          
                        </div>
</form>
                    </div>
                </div>



                 <div class="card-content tab-pane" id="contact">
                    <div class="card-body">
                         <form method="post">
                        <div class="row">
                           
                            <div class="col-md-4">
                  <div class="form-group">

                    <!-- Fetching Vendor Details to add New contact Person Details -->

             
              <label for="basicInput">Choose Vendor</label>
              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons" name="vendor_company_name1">
                  <option selected disabled>Choose Vendor</option>    
               <?php
               $vendor=mysqli_query($conn,"select * from vendor_information");
               foreach ($vendor as $doc) 
               {
                 
               ?>
                  <option value="<?php echo $doc['vendor_id']; ?>" data-icon="wordpress2" ><?php echo $doc['vendor_company_name'];?></option>
                  <?php
                }
                ?>
                
              </select>
            </div>
          </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Contact Person Name</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_name1" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Mobile</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_mobile1" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Email</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_email1" >
                                </fieldset>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Landline</label>
                                    <input type="text" class="form-control" id="basicInput" name="vendor_contact_landline1" >
                                </fieldset>
                            </div>
                             <div class="col-sm-12 mb-1">
                            <button class="btn btn-primary float-right" type="submit" name="add_contact" value="add_contact"> Submit</button>
                          </div>
                           
                        
                        </div>
                    </form>
                    </div>
                </div>
                <div class="card-content tab-pane" id="view">
                    <div class="card-body">
                     
        <div class="card-content collapse show">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
                         <table class="table table-striped table-bordered dataex-html5-export">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Company Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Landline</th>
                  <th>GST Number</th>
                  <th> View Contacts</th>
                  <th>Edit</th>
                  

                  
                </tr>
              </thead>
              <tbody>
                <?php
                $i=1;

                $sql=mysqli_query($conn,"select * from vendor_information where garage_id='$garage_id'");
                foreach($sql as $doc) 
                {
                  

                ?>               
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $doc['vendor_company_name']; ?></td>
                  <td><?php echo $doc['vendor_mobile']; ?></td>
                  <td><?php echo $doc['vendor_email']; ?></td>
                   <td><?php echo $doc['vendor_landline_no']; ?></td>
                  <td><?php echo $doc['vendor_gst_no']; ?></td>
<form action="view-contacts.php" method="post" target="new">
    <input type="hidden" name="hide" value="<?php echo $doc['vendor_id']; ?>" >
                 <td><button class="btn btn-primary float-right" type="submit" name="view_contacts" value="view_contacts">View Contacts</button></td>
</form>
                  <td><button class="btn btn-primary float-right" type="submit" name="edit_contacts" value="edit_contacts">Edit</button></td>
                 
                </tr>
                
               <?php
               $i=$i+1;
               }
               ?> 
              </tbody>
              <tfoot>
                <tr>
                <th>#</th>
                  <th>Company Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Landline</th>
                  <th>GST Number</th>
                  <th>View Contacts</th>
                  <th>Edit</th>
                </tr>
              </tfoot>
            </table> 
        </div>
        </div>
    </div>



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

    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/unslider-min.js"></script>
    <script src="../../../app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
     <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/buttons.colVis.min.js"></script>
    <script src="../../../app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.min.js"></script>
    <script src="../../../app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-visibility.min.js"></script>
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:03:18 GMT -->
</html>
