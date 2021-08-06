
<?php 

require_once('../Conection.php');

$selectdata = "SELECT * FROM `device`";

$query = mysqli_query($con, $selectdata);
$num = 1;
$data = "<tr style='display: none;'></tr>";

while($row = mysqli_fetch_assoc($query))
{
	$data .= "<tr><td>".$num."</td><td>".$row['Name']."</td><td>
	<button class='btn btn-warning' onclick='deviceUpdate(".$row['DeviceID'].");'>Edit</button>
	<button class='btn btn-danger'onclick='deviceDelete(".$row['DeviceID'].");' >Delete</button>
	</td></tr>"."My name ids";
	$num++;
}

echo $data;
?>















