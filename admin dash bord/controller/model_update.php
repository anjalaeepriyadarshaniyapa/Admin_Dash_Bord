 <?php  
  require_once('../Conection.php');

  $query = "UPDATE `model` SET `ModelNumber`='".$_POST['device_model']."',`DeviceID`='".$_POST['device_id']."' WHERE `ModelID` = '".$_POST['model_id']."'";

	try
	{
		if (mysqli_query($con, $query)) 
		{
			$msg = "Model updated successfully.";
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