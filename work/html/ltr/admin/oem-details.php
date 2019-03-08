<?php
include('dbconnect.php');

// Insering or Adding OEM names

if(isset($_POST['add_oem']))
{
  $oem_name=$_POST['oem_name'];
  $oem_status='0';

  $add_oem=mysqli_query($conn,"insert into oem_details values(null,'$oem_name','$oem_status')");
}

// Insering or Adding Vehicle Model Names


if(isset($_POST['add_vehicle']))
{
  $oem_id=$_POST['oem_id'];
  $vehicle_model_name=$_POST['vehicle_model_name'];
  $oem_model_type=$_POST['oem_model_type'];
  $oem_vehicle_status='0';
  $add_oem_vehicle=mysqli_query($conn,"insert into oem_model_details values(null,'$oem_id','$vehicle_model_name','$oem_model_type','$oem_vehicle_status')");

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

<!--/ Basic Horizontal Timeline -->


     <div class="content-body">
    <section id="html5">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add OEM</h4>
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
       
              <form class="form" method="post">
              <div class="form-body">
              
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                       <div class="input-group">
                       
                <input type="text" class="form-control" placeholder="Enter OEM Name" name="oem_name" aria-describedby="button-addon2">
                <div class="input-group-append" id="button-addon2">
                  <button class="btn btn-primary" type="submit" id="userinput2" class="btn btn-primary" name="add_oem" value="submit"><i class="fa fa-check-square-o"></i>  Add</button>
                </div>
              </div>
                    
                    </div>
                  </div>




                
                
                </div>
                

                

              </div>

          
            </form>       
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
 <div class="content-body">
    <section id="html5">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add OEM Vehicle Details</h4>
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
       
              <form class="form" method="post">
              <div class="form-body">
              
                <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">

                    <!-- Fetching OEM Details to add Vehicle Model Details -->

             

              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons" name="oem_model_type">
                  <option selected disabled>Choose Vehicle Type</option>    
               
                  <option value="two wheeler" data-icon="wordpress2" >Two Wheeler</option>
                  <option value="four wheeler" data-icon="wordpress2" >Four Wheeler</option>
                
                
              </select>
            </div>
          </div>
                  <div class="col-md-4">
                  <div class="form-group">

                    <!-- Fetching OEM Details to add Vehicle Model Details -->

             

              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons" name="oem_id">
                  <option selected disabled>Choose OEM</option>    
               <?php
               $vehicle=mysqli_query($conn,"select * from oem_details");
               foreach ($vehicle as $doc) 
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
                       <div class="input-group">
                       
                <input type="text" class="form-control" placeholder="Vehicle Model Name" name="vehicle_model_name" aria-describedby="button-addon2">
                <div class="input-group-append" id="button-addon2">
                  <button class="btn btn-primary" type="submit" id="userinput2" class="btn btn-primary" name="add_vehicle" value="submit"><i class="fa fa-check-square-o"></i>  Add</button>
                </div>
              </div>
                    
                    </div>
                  </div>
                

                  
                </div>
                

                

              </div>

          
            </form>       
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>



    <div class="content-body">
    <section id="html5">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">OEM Details</h4>
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

       <!-- Displaying OEM Details with Respective Vehicle Details -->

            <table class="table table-striped table-bordered dataex-html5-export">
              <thead>
                <tr>
                  <th>#</th>
                  <th>OEM Name</th>
                  <th>Vehicle Model Name</th>
                  <th>Vehicle Model Type</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  

                  
                </tr>
              </thead>
              <tbody>
                <?php
                $i=1;

                $sql=mysqli_query($conn,"select * from oem_details o,oem_model_details v where o.oem_id=v.oem_id");
                foreach ($sql as $doc) 
                {
                  

                ?>               
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $doc['oem_name']; ?></td>
                  <td><?php echo $doc['oem_model_name']; ?></td>
                  <td><?php echo $doc['oem_model_type']; ?></td>
                  <td>Edit</td>
                  <td>Delete</td>
                 
                </tr>
                
               <?php
               $i=$i+1;
               }
               ?> 
              </tbody>
              <tfoot>
                <tr>
                <th>#</th>
                  <th>OEM Name</th>
                  <th>Vehicle Model Name</th>
                  <th>Vehicle Model Type</th>
                   <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
            </table>        
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
    <div class="buy-now"><a href="#" target="_blank" class="btn bg-gradient-directional-purple white btn-purple btn-glow px-2">Buy Now</a></div>

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