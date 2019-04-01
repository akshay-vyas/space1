<?php 
include('dbconnect.php');
session_start();
error_reporting(0);
    $owner_id=$_SESSION['owner_id'];
    $garage_id='';
 
    $owner_info=mysqli_query($conn,"select * from garage_details where owner_id='$owner_id'");
    foreach ($owner_info as $info)
    {
        $garage_id=$info['garage_id'];
    }

 if (isset($_POST['add_spare_quantity']))
    {
        
        $spare_id=$_POST['spare_partid'];
        $spare_quantity=$_POST['spare_quantity'];
        $spare_quantity_status='0';

     


        $spare_insert=mysqli_query($conn,"insert into spares_quantity_details values(null,'$spare_id','$spare_quantity','$spare_quantity_status')");

     



      header('Location:spares-quantity.php');

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
        <!-- ajax -->

    <script type="text/javascript" src="./src/js/lib/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./src/js/lib/jquery-ui.min.js"></script>
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
                                    <h4 class="card-title">Spares Quantity</h4>
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

                                            <a class="nav-link active show"  id="home-tab" data-toggle="tab" href="#create" role="tab" aria-controls="home" aria-selected="true">Add Spares Quantity</a>

                                        </li>

                                       

                                        <li class="nav-item">

                                            <a class="nav-link" id="profile-tab" onclick="veiw()" data-toggle="tab" href="#view" role="tab" aria-controls="profile" aria-selected="false">View/Search</a>

                                        </li>



                                    </ul>


                                    <div class="tab-content">
                                        <div class="card-content tab-pane active" id="create">
                                            <div class="card-body">
                                                
                                                    <div class="row">
                   <div class="col-12">
                <div class="table-responsive">
                    <table id="autocomplete_table" class="table table-hover autocomplete_table">
                        <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">spares name</th>
                                <th scope="col">spares no</th>
                                <th scope="col">gstin</th>
                                <th scope="col">hsn</th>
                                <th scope="col">spareamount</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr id="row_1">
                                <th id="delete_1" scope="row" class="delete_row"><img src="./src/images/minus.svg" alt=""></th>
                                <td>
                                    <input type="text" data-type="sparename" name="sparename[]" id="sparename_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" data-type="spareno" name="spareno[]" id="spareno_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" data-type="gstin" name="gstin[]" id="gstin_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" data-type="hsn" name="hsn[]" id="hsn_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                 <td>
                                    <input type="text" data-type="spareamount" name="spareamount[]" id="spareamount_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
          
                                  <div class="btn-container">
                    <button class="btn btn-info" id="addNew">
                        Add New
                    </button>
                </div>  
                              




                                                  
                                                    </div>
                                                    
                                                
                                            </div>
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
                                                  <th>Quantity</th>
                                                  <th>Edit</th>



                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $i=0;

                                            $sql=mysqli_query($conn,"select * from spares_quantity_details q,spares_details s,vendor_information v where q.spare_id=s.spare_id and s.vendor_id=v.vendor_id and s.garage_id='$garage_id'");
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
                                                 <td><?php echo $doc['spare_quantity'] ?></td>
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
                                                  <th>Quantity</th>
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




<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<script>
function getPartInfo(val) {
  $.ajax({
  type: "POST",
  url: "ajax-spares-info.php",
  data:'spare_id='+val,
  success: function(data){
    $("#ajax-info").html(data);
  }
  });
}

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
 <script src="src/js/app.js"></script>
</body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 20:03:18 GMT -->
</html>