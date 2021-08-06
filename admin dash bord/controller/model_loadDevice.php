
<?php 

require_once('../Conection.php');

$selectdata = "SELECT * FROM `device`";

$query = mysqli_query($con, $selectdata);

while($row = mysqli_fetch_assoc($query))
{
	echo "<option value=".$row['DeviceID'].">" .$row['Name']."</option>";
}
?>