<?php
	include('db_config.php');
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$query = "SELECT * FROM garage where gEmail = '$email' AND gPassword = '$pass'";
	$result = mysqli_query($conn,$query);
	if(mysql_num_rows($result) > 0)
	{
		$data = mysqli_fetch_array($result);
		session_start();
		$_SESSION['email'] = $data['gEmail'];
		$_SESSION['name'] = $data['gName'];
		header('location: index.php');
	}
	else
	{
		echo "Invalid Username and Password";
	}
?>