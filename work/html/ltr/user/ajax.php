<?php
require_once 'dbconnect.php';

$fieldNo = !empty($_GET['fieldNo']) ? $_GET['fieldNo'] : '';
$name = !empty($_GET['name']) ? strtolower(trim($_GET['name'])) : '';

$fieldName = 'spare_part_name';

switch ($fieldNo) {
    case 1:
        $fieldName = 'spare_part_no';
        break;
    case 2:
        $fieldName = 'spare_gstin';
        break;
    case 3:
        $fieldName = 'spare_hsn';
        break;
    case 4:
        $fieldName = 'spare_amount';
        break;
}

$data = array();
if (!empty($_GET['name'])) {
    $name = strtolower(trim($_GET['name']));
    $sql = "SELECT spare_part_name, spare_part_no, spare_gstin, spare_hsn, spare_amount FROM spares_details where LOWER($fieldName) LIKE '" . $name . "%'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['spare_part_name'] . '|' . $row['spare_part_no'] . '|' . $row['spare_gstin'] . '|' . $row['spare_hsn'] . '|' . $row['spare_amount'];
        array_push($data, $name);
    }
}
echo json_encode($data);exit;
