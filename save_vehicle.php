<?php

	session_start();
	include 'db_config.php';

	$userEmail = $_SESSION["email"];
	$query = "SELECT uId FROM user WHERE uEmail = '$userEmail'";
	$result = mysqli_query($conn, $query);
	if ($result) 
	{
		if (mysqli_num_rows($result) > 0)
		{
			$userData = mysqli_fetch_array($result);
			$userId = $userData[0];
			$name = $_POST["name"];
			$type = $_POST["type"];
			$model = $_POST["model"];
			$v_num = $_POST["v_num"];
			$dop = $_POST["dop"];
			$insertQuery = "INSERT INTO vehicles(user_id, name, type, model, v_num, dop) VALUES('$userId', '$name', '$type', '$model', '$v_num', '$dop')";
			$result = mysqli_query($conn, $insertQuery);
			if ($result) 
			{
				$selectQuery = "SELECT * FROM vehicles WHERE user_id = '$userId'";
				$result = mysqli_query($conn, $selectQuery);
				if (mysqli_num_rows($result) > 0) 
				{
					$vehicleData = mysqli_fetch_all($result);
					$_SESSION["vehicleData"] = $vehicleData;
					header("location: vehicles.php");				
				}
				else
				{
					echo(mysqli_error());
				}
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
		echo(mysqli_error($conn));
	}
	
	// $name = $_POST["name"];
?>

