<?php 
	session_start();
	$vehicle_data = $_SESSION["vehicleData"];
	include 'db_config.php';
	$userEmail = $_SESSION["email"];
	$query = "SELECT uaddress FROM user WHERE uEmail = '$userEmail'";
	$result = mysqli_query($conn, $query);
	if ($result) 
	{
		if (mysqli_num_rows($result) > 0)
		{
			$userAddress = mysqli_fetch_array($result);
			$selectQuery = "SELECT * FROM vehicles WHERE user_id = '$userId[0]'";
			$result = mysqli_query($conn, $selectQuery);
			if (mysqli_num_rows($result) > 0) 
			{
				$vehicleData = mysqli_fetch_all($result);
				$_SESSION["vehicleData"] = $vehicleData;
				// header("location: vehicles.php");				
				var_dump($vehicleData);
			}
			else
			{
				echo(mysqli_error($conn));
			}
		}
		else
		{
			echo("No results found");
		}
	}
	else
	{
		echo(mysqli_error());
	}
?>