<?php
	$host="localhost";
    $username="root";
    $pass="Dhara@1598753";
    $db_name="vapour";
    $conn=mysqli_connect($host,$username,$pass);
    echo "string";
    if(!$conn)
    {
        echo(mysqli_connect_error());
    }
    else
    {
        $db_conn=mysqli_select_db($conn,$db_name);   
        if (!$db_conn) 
        {
            echo "Can not connect to database";
        }
    }    
?>