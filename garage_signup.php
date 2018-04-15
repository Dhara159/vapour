<?php

	include('db_config.php');
    $gname=$_POST['gname'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $gphone=$_POST['gphone'];
    $mail_id=$_POST['email'];
    $pwd=$_POST['password'];
    $add=$_POST['add'];
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$add."&key=AIzaSyBhwtAm6mHy6brN3IeEOLIpbxIwE3cTwK4";
    $data = json_decode(file_get_contents($url), true);
    if ($data["status"] == "OK") 
    {
        $lat = $data["results"][0]["geometry"]["location"]["lat"];
        $lng = $data["results"][0]["geometry"]["location"]["lng"];
        $query="INSERT INTO `garage`(`gId`, `gName`, `gOwner`, `gEmail`, `gPassword`, `gAddress`, `gPhone`, `gOphone`, `lat`, `lng`) VALUES (NULL,'$gname', '$name', '$mail_id', '$pwd', '$add', '$gphone','$phone','$lat','$lng')";
        $result=mysqli_query($conn,$query);
        if($result)
        {    
            header('location: garage_login.html');
        }
        else
        {
            echo mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else
    {
        echo("Please Enter correct Address");
    }

?>