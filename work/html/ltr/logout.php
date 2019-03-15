<?php
include('admin/dbconnect.php');
session_start();
unset($_SESSION["owner_id"]);
unset($_SESSION["owner_mobile"]);
session_destroy();

header("Location:login.php");
exit;
?>