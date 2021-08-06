<?php 

require_once('../Conection.php');

$selectdata = "SELECT * FROM `device` WHERE `DeviceID` = '".$_POST['id']."'";

$query = mysqli_query($con, $selectdata);
$dataArray = array();
while($row = mysqli_fetch_assoc($query))
{
	$id = $row['DeviceID'];
	$name = $row['Name'];
}
// echo json_encode($dataArray);
echo json_encode(['id'=>$id, 'name'=>$name]);
?>