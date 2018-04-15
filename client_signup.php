<?php

	include('db_config.php');
    $name=$_POST['name'];
    $mail_id=$_POST['email'];
    $pwd=$_POST['password'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    
    $query="INSERT INTO `user`(`uId`, `uName`, `uEmail`, `uPassword`, `uaddress`, `uphone`) VALUES (NULL, '$name', '$mail_id', '$pwd', '$add', '$phone')";
    $result=mysqli_query($conn, $query);
    if($result)
    {
            header('location: client_login.html');
    }
    else
    {
        echo mysqli_error();
    }
    mysqli_close($conn);
?>