
<?php 

require_once('../Conection.php');

$selectdata = "SELECT `model`.`ModelID` AS MID, `model`.`ModelNumber` AS MNUM, `device`.`Name` AS DNM FROM `model` INNER JOIN `device` ON `model`.`DeviceID` = `device`.`DeviceID` LIMIT 10";

$query = mysqli_query($con, $selectdata);
$num = 1;
$data = "<tr style='display: none;'></tr>";

while($row = mysqli_fetch_assoc($query))
{
	$data .= "<tr><td>".$num."</td><td>".$row['DNM']."</td><td>".$row['MNUM']."</td><td>
	<button class='btn btn-warning' onclick='modelUpdate(".$row['MID'].");'>Edit</button>
	<button class='btn btn-danger'onclick='modelDelete(".$row['MID'].");' >Delete</button>
	</td></tr>";
	$num++;
}
// Device , Model ... Edit/Delete

echo $data;
?>