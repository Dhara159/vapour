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
          $selectQuery = "SELECT * FROM package";
          $result = mysqli_query($conn, $selectQuery);
          if ($result) 
          {
            if (mysqli_num_rows($result)>0) 
            {
              $packages = mysqli_fetch_all($result);
              $_SESSION["packages"] = $packages;
              header("location: show_service.php");
            }
            else
            {
              echo("No packages found");
            }
          }
          else
          {
            echo(mysqli_error());
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
    echo(mysqli_error());
  }

?>