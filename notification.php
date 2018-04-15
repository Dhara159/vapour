
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
  <title>Vapor Service|Client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
      <li><a href="about.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> Dashboard</a></li>
      <li><a href="book.php"><span class="glyphicon glyphicon-log-in"></span> Booking</a></li>
      <li><a href="vehicles.php"><span class="glyphicon glyphicon-log-in"></span> Vehicles</a></li>
      <li><a href="history.php"><span class="glyphicon glyphicon-log-in"></span> History</a></li>
      <li class="active"><a href="notification.php"><span class="glyphicon glyphicon-log-in"></span> Notification</a></li>
      <li><a href="garage.php"><span class="glyphicon glyphicon-log-in"></span> Garages</a></li>
      <li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> Profile</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
      <div class="row">
        <div class="panel-heading">
            <div class="panel-title text-left">
              <h1 class="title">Hello,<br> <?php
                  if(!empty($_SESSION["name"]))
                  {
                    echo(ucfirst($_SESSION["name"]));
                  }
                ?></h1>
              </div>
        </div>
<div class="container">
      <div class="row main">
        <div class="col-md-4">
          <div class="jumbotron">
            <div class="panel-header"><h3>Notification</h3></div>
            <div class="panel-body">Check updates on both your repairing and service booked.<br> Stay connected!</div>
            <div class="panel-footer">Goto Notification:
              <button class="btn btn-danger">Get</button>
            </div>
          </div>
        </div>