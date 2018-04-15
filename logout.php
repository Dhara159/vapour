<?php
	session_start();
	if ($_SESSION["email"] && $_SESSION["name"]) 
	{
		unset($_SESSION["logged_in"]);
		unset($_SESSION["email"]);
		unset($_SESSION["name"]);
		session_destroy();
		header("location: index.php");
		exit();
	}
	else
	{
		echo("Already logged out!");
	}

?>