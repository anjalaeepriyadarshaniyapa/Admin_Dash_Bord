<?php  
  require_once('../Conection.php');

  $query = "INSERT INTO `model`(`ModelNumber`, `DeviceID`) VALUES ('".$_POST['device_model']."','".$_POST['device_id']."')";
	try 
	{
		if (mysqli_query($con, $query)) 
		{
			$msg = "New model Added successfully.";
		}
		else {
			$msg = "Error Saving"; 
		}
	}
	catch (exception $ex)
	{
		$msg = "Error Exception";
	}
	finally
	{
		mysqli_close($con);
	}
	echo $msg;
 ?> 