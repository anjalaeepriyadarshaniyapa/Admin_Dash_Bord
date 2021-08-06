<?php 

require_once('../Conection.php');

$selectdata = "SELECT * FROM `model` WHERE `ModelID` = '".$_POST['id']."'";

$query = mysqli_query($con, $selectdata);
// $dataArray = array();
while($row = mysqli_fetch_assoc($query))
{
	$id = $row['ModelID'];
	$did = $row['DeviceID'];
	$name = $row['ModelNumber'];
}
// echo json_encode($dataArray);
echo json_encode(['id'=>$id, 'did'=>$did, 'name'=>$name]);
?>