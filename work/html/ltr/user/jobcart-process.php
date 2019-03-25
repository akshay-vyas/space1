<?php 

if(isset($_POST['jobcard']))
{
	echo $_POST['vehicle_number']."<br>";
	echo $_POST['oem_id']."<br>";
	echo $_POST['oem_model_id']."<br>";
	echo $_POST['vehicle_color']."<br>";
	echo $_POST['vehicle_purchase_date']."<br>";
	echo $_POST['vehicle_key_no']."<br>";
	echo $_POST['vehicle_battery_no']."<br>";
	echo $_POST['vehicle_chassis_no']."<br>";
	echo $_POST['vehicle_engine_no']."<br>";
	echo $_POST['jobcard_date']."<br>";
	echo $_POST['repair_id']."<br>";
	echo $_POST['manual_jocard']."<br>";
	echo $_POST['km_reading']."<br>";
	echo $_POST['fule_level']."<br>";
	echo $_POST['next_km_reading']."<br>";
	echo $_POST['next_service_date']."<br>";
	echo $_POST['remark']."<br>";
	echo $_POST['complaint_box']."<br>";

	echo $_POST['customer_name']."<br>";
	echo $_POST['customer_mobile']."<br>";
	echo $_POST['customer_address']."<br>";
	echo $_POST['customer_email']."<br>";
	echo $_POST['customer_alternate_no']."<br>";
	echo $_POST['customer_aadhar']."<br>";
	echo $_POST['customer_pan']."<br>";
	echo $_POST['service_types']."<br>";

$service_id = $_POST['service_id'];
	foreach ($service_id as $key)
	{
		echo $key." <br>for loop<br>";
		# code...
	}


	$spare_id = $_POST['spare_id'];
	foreach ($spare_id as $key)
	{
		echo $key." <br>for loop<br>";
		# code...
	}

	$quantity = $_POST['quantity'];
	foreach ($quantity as $key)
	{
		echo $key."<br> for loope quantity<br>";
		# code...
	}
}


?>