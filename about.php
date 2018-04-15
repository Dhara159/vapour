<?php
  session_start();
  if (!isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == FALSE) 
  {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Vapor Service</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li class="active"><a href="about.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
        if (!empty($_SESSION["email"] && !empty(($_SESSION["name"])))) 
        { ?>
          <li><a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> Dashboard</a></li>
          <li><a href="book.php"><span class="glyphicon glyphicon-log-in"></span> Booking</a></li>
          <li><a href="vehicles.php"><span class="glyphicon glyphicon-log-in"></span> Vehicles</a></li>
          <li><a href="history.php"><span class="glyphicon glyphicon-log-in"></span> History</a></li>
          <li><a href="notification.php"><span class="glyphicon glyphicon-log-in"></span> Notification</a></li>
          <li><a href="garage.php"><span class="glyphicon glyphicon-log-in"></span> Garages</a></li>
          <li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> Profile</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <?php 
        }
        else
        { ?>
          <li><a href="client_signup.html"><span class="glyphicon glyphicon-user"></span> Client SignUp</a></li>
          <li><a href="client_login.html"><span class="glyphicon glyphicon-log-in"></span>Client Login</a></li>
          <li><a href="garage_signup.html"><span class="glyphicon glyphicon-user"></span>Garage SignUp</a></li>
          <li><a href="garage_login.html"><span class="glyphicon glyphicon-log-in"></span>Garage Login</a></li>
        <?php }
      ?>
    </ul>
  </div>
</nav>
  
<div class="container">
  <!-- <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p> -->
</div>

</body>
</html>
