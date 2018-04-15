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
				$service_bought = mysqli_fetch_all($result);
				$service_id = $service_bought[0][2]; 
				$selectQuery = "SELECT * FROM package WHERE id = '$service_id'";
				$result = mysqli_query($conn, $selectQuery);
				if ($result) 
				{
					$service_data = mysqli_fetch_all($result);
					$service_array = array('service_id' => $service_id,
											'service_name' => $service_data[0][1], 
											'dob' => $service_bought[0][3],
											'doe' => $service_bought[0][4], 
											'remaining' => $service_bought[0][5],
											'tso' => $service_data[0][5],
											'charges' => $service_data[0][3]);
					$_SESSION["service_report"] = $service_array;
					if (isset($_GET["data"])) 
					{
						
					}
					else
					{
						header("location: show_service_card.php");
					}
				}
				else
				{
					echo(mysqli_error($conn));
				}
			}
			else
			{
				echo("No services bought by you");      
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