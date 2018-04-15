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
		$userId = mysqli_fetch_array($result);
		$selectQuery = "SELECT * FROM user_services WHERE user_id = '$userId[0]'";
      	$result = mysqli_query($conn, $selectQuery);
      	if ($result) 
      	{
	        if (mysqli_num_rows($result) > 0) 
        	{
          		echo("Already bought service");
        	}
        	else
        	{
				$service_id = $_POST["service_id"];
				$duration = $_POST["service_duration"];
				$dob = date("Y-m-d");
				$doe = date('Y-m-d', strtotime("+$duration months", strtotime($dob)));
				$remaining_service = $_POST["service_tso"];
				$insertQuery = "INSERT INTO user_services(user_id, service_id, dob, doe, remaining) VALUES('$userId[0]', '$service_id', '$dob', '$doe', '$remaining_service')";
				// echo($insertQuery);
				$result = mysqli_query($conn, $insertQuery);
				if ($result) 
				{
					echo("Bought 1 package");
					header("location: service_report.php");
				}
				else
				{
					echo(mysqli_error($conn));
				}
			}
		}
		else
		{
			echo(mysqli_error($conn));
		}
	}
	else
	{
		echo("No record found");
	}
}
else
{
	echo(mysqli_error($conn));
}

?>