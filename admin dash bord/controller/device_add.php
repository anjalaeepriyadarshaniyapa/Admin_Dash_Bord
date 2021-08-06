<?php  
  require_once('../Conection.php');

  $query = "INSERT INTO `device`(`Name`) VALUES ('".$_POST['device_name']."')";
	try
	{
		if (mysqli_query($con, $query)) 
		{
			$msg = "New device Added successfully.";
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