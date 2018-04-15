<?php
	include('db_config.php');
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$query = "SELECT * FROM `user` WHERE uEmail = '$email' AND uPassword = '$pass'";
	$result = mysqli_query($conn,$query);
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			$data = mysqli_fetch_array($result);
			session_start();
			$_SESSION["logged_in"] = TRUE;
			$_SESSION['email'] = $data['uEmail'];
			$_SESSION['name'] = $data['uName'];
			header('location: dashboard.php');
		}
		else
		{
			echo("User not found!");
		}
	}
	else
	{
		echo(mysql_error());
	}
?>