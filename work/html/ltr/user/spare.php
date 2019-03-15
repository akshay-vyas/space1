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

 if (isset($_POST['add_spare']))
    {
        $spare_vendor_id=$_POST['spare_vendor_id'];
        $spare_part_name=$_POST['spare_part_name'];
        $spare_part_no=$_POST['spare_part_no'];
        $spare_oem_id=$_POST['spare_oem_id'];
        $spare_oem_model_id=$_POST['spare_oem_model_id'];
        $spare_gstin=$_POST['spare_gstin'];
        $spare_hsn=$_POST['spare_hsn'];
        $spare_amount=$_POST['spare_amount'];
        $spare_gst_percentage=$_POST['spare_gst_percentage'];
        $spare_gst_amount=$_POST['spare_gst_amount'];
        $spare_total_amount=$_POST['spare_total_amount'];
        $spare_status='0';

     


        $spare_insert=mysqli_query($conn,"insert into spares_details values(null,'$garage_id','$spare_vendor_id','$spare_part_name','$spare_part_no','$spare_oem_id','$spare_oem_model_id','$spare_gstin','$spare_hsn','$spare_amount','$spare_gst_percentage','$spare_gst_amount','$spare_total_amount','$spare_status')");

  



      header('Location:spare.php');

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
                                    <h4 class="card-title">Spares Information</h4>
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
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                        <li class="nav-item active">

                                            <a class="nav-link active show"  id="home-tab" data-toggle="tab" href="#create" role="tab" aria-controls="home" aria-selected="true">Add Spares</a>

                                        </li>

                                       

                                        <li class="nav-item">

                                            <a class="nav-link" id="profile-tab" onclick="veiw()" data-toggle="tab" href="#view" role="tab" aria-controls="profile" aria-selected="false">View/Search</a>

                                        </li>



                                    </ul>


                                    <div class="tab-content">
                                        <div class="card-content tab-pane active" id="create">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-md-4">
                  <div class="form-group">

                    <!-- Fetching vendor Details  -->

             
               <label for="basicInput">Choose Vendors</label>
              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons" name="spare_vendor_id">
                  <option selected disabled>Choose Vendor</option>    
               <?php
               $vendor=mysqli_query($conn,"select * from vendor_information where garage_id='$garage_id'");
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
                                                                <label for="basicInput">Part Name</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_part_name" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Part Number</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_part_no">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="form-group">

                    <!-- Fetching OEM Details  -->

                            <label for="basicInput">Choose OEM</label>
              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons" name="spare_oem_id">
                  <option selected disabled>Choose OEM</option>    
               <?php
               $oem=mysqli_query($conn,"select * from oem_details");
               foreach ($oem as $doc) 
               {
                 
               ?>
                  <option value="<?php echo $doc['oem_id']; ?>" data-icon="wordpress2" ><?php echo $doc['oem_name'];?></option>
                  <?php
                }
                ?>
                
              </select>
            </div>
          </div>
        <div class="col-md-4">
        <div class="form-group">

                    <!-- Fetching Vehicle Model Details  -->

                            <label for="basicInput">Choose Vehicle Model</label>
              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons" name="spare_oem_model_id">
                  <option selected disabled>Choose Vehicle Model</option>    
               <?php
               $oem_mod=mysqli_query($conn,"select * from oem_model_details");
               foreach ($oem_mod as $doc) 
               {
                 
               ?>
                  <option value="<?php echo $doc['oem_model_id']; ?>" data-icon="wordpress2" ><?php echo $doc['oem_model_name'];?></option>
                  <?php
                }
                ?>
                
              </select>
            </div>
          </div>

                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">GSTIN</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_gstin">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">HSN</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_hsn">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">MRP</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_amount">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">GST %</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_gst_percentage">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">GST Amount</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_gst_amount">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Total Amount</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_total_amount">
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-sm-12 mb-1">
                                                <button class="btn btn-primary float-right" type="submit" name="add_spare" value="add_spare"> Submit</button>
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
                                                  <th>Spare ID</th>
                                                  <th>Vendor Name</th>
                                                  <th>Part Name</th>
                                                  <th>Part Number</th>                                                  
                                                  <th>GSTIN</th>
                                                  <th>HSN</th>
                                                  <th> MRP </th>                                                  
                                                  <th> GST % </th>
                                                  <th>Edit</th>



                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $i=0;

                                            $sql=mysqli_query($conn,"select * from spares_details s,vendor_information v,oem_details o, oem_model_details m where s.vendor_id=v.vendor_id and s.oem_id=o.oem_id and s.oem_model_id=m.oem_model_id and o.oem_id=m.oem_id and s.garage_id='$garage_id'");
                                            foreach($sql as $doc) 
                                            {


                                                ?>               
                                                <tr>
                                                  <td><?php echo $i=$i+1;?></td>
                                                  <td><?php echo "spare code " ?></td>
                                                  <td><?php echo $doc['vendor_company_name']; ?></td>
                                                  <td><?php echo $doc['spare_part_name']; ?></td>
                                                  <td><?php echo $doc['spare_part_no']; ?></td>
                                                  <td><?php echo $doc['spare_gstin']; ?></td>
                                                 <td><?php echo $doc['spare_hsn']; ?></td>
                                                 <td><?php echo $doc['spare_amount']; ?></td>
                                                 <td><?php echo $doc['spare_gst_percentage']; ?></td>
                                                <td><button class="btn btn-primary float-right" type="submit" name="edit_contacts" value="edit_contacts">Edit</button></td>

                                            </tr>

                                            <?php
                                            
                                        }
                                        ?> 
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Spare ID</th>
                                                  <th>Vendor Name</th>
                                                  <th>Part Name</th>
                                                  <th>Part Number</th>                                                  
                                                  <th>GSTIN</th>
                                                  <th>HSN</th>
                                                  <th> MRP </th>                                                  
                                                  <th> GST % </th>
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
