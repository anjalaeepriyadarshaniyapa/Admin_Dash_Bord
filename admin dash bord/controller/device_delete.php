<?php  
  require_once('../Conection.php');

  $query = "DELETE FROM `device` WHERE `DeviceID`='".$_POST['device_id']."'";

	try
	{
		if (mysqli_query($con, $query)) 
		{
			$msg = "Device removed successfully.";
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