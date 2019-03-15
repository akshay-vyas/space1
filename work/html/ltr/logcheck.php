<?php 

include('admin/dbconnect.php');
session_start();
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['userpassword'];
	$log = mysqli_query($conn,"select * from garage_owner where (owner_email = '$username' or owner_mobile = '$username') and owner_password='$password' LIMIT 1 ");

	foreach ($log as $log) 
	{
		if($log['owner_status']=='inactive')
		{
			$_SESSION['owner_id'] = $log['owner_id'];

			header('Location:user/garage-details.php');
		}
		else
		{
			$_SESSION['owner_id'] = $log['owner_id'];
			$_SESSION['owner_mobile'] = $log['owner_mobile'];
			if(isset($_SESSION['owner_id']))
			{
				header('Location:user/index.php');

			}
			
		}
		break;
		# code...
	}
}

?>