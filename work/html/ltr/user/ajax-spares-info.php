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
//$categoryId = $_GET['category_id'];

if(!empty($_POST["spare_id"]))
{
	$spare_id=$_POST['spare_id'];
	$query ="select * from spares_details s,vendor_information v,oem_details o, oem_model_details m where s.vendor_id=v.vendor_id and s.oem_id=o.oem_id and s.oem_model_id=m.oem_model_id and o.oem_id=m.oem_id and s.garage_id='$garage_id' and s.spare_id='$spare_id'";
	$res= mysqli_query($conn,$query);
?>
										<?php
										foreach ($res as $doc) {
															# code...
														
														?>	
														<input type="hidden" name="spare_partid" value="<?php echo $doc['spare_id']; ?>">			
                                                        <div >
                                                            
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Vendor Name</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_vendor" value="<?php echo $doc['vendor_company_name']; ?>" >
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Part Number</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_part_no" value="<?php echo $doc['spare_part_no'];?>">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"> OEM</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_oem" value="<?php echo $doc['oem_name']; ?>">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Vehicle Model</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_vehicle_model" value="<?php echo $doc['oem_model_name']; ?>">
                                                            </fieldset>
                                                        </div>


                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">GSTIN</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_gstin"  value="<?php echo $doc['spare_gstin']; ?>">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">HSN</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_hsn"  value="<?php echo $doc['spare_hsn']; ?>">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">MRP</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_amount"  value="<?php echo $doc['spare_amount']; ?>">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">GST %</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_gst_percentage"  value="<?php echo $doc['spare_gst_percentage']; ?>">
                                                            </fieldset>
                                                        </div>
                                                         <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Spare Quantity</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_quantity"  value="">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">GST Amount</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_gst_amount" value="<?php echo $doc['spare_gst_amount']; ?>">
                                                            </fieldset>
                                                        </div>
                                                        <div >
                                                            <fieldset class="form-group">
                                                                <label for="basicInput">Total Amount</label>
                                                                <input type="text" class="form-control" id="basicInput" name="spare_total_amount" value="<?php echo $doc['spare_total_amount']; ?>">
                                                            </fieldset>
                                                        </div>


<?php } }
?>