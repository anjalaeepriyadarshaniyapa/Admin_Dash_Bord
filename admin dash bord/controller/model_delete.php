<?php  
  require_once('../Conection.php');

  $query = "DELETE FROM `model` WHERE `ModelID`='".$_POST['model_id']."'";

	try
	{
		if (mysqli_query($con, $query)) 
		{
			$msg = "Model removed successfully.";
		}
		else {
			$msg = "Model remove error "; 

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