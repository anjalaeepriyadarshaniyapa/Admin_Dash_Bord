<?php  
  require_once('../Conection.php');

  $query = "UPDATE `device` SET `Name`='".$_POST['device_name']."' WHERE `DeviceID`='".$_POST['device_id']."'";

	try
	{
		if (mysqli_query($con, $query)) 
		{
			$msg = "Device updated successfully.";
		}
		else {
			$msg = "Error "; 

		}
	}
	catch (exception $ex)
	{
		$msg = "Error ";
	}
	finally
	{
		mysqli_close($con);
	}
	echo $msg;
 ?> 