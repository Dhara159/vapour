
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
      <li><a href="notification.php"><span class="glyphicon glyphicon-log-in"></span> Notification</a></li>
      <li><a href="garage.php"><span class="glyphicon glyphicon-log-in"></span> Garages</a></li>
      <li class="active"><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> Profile</a></li>
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
            <!--/.well -->
        </div>
        <!--/span-->

            <div class="col-xs-8 col-sm-8" style="margin-top: 15px;">
                <div class="modal-content">
                    <div class="modal-header" id="header_style" style="background-color: #208dbf;">
                        <h2 style="text-align: center;"><img class="img-circle" src="" alt=""><br>Namrata Chauhan</h2>
                    </div>
                    <br>
                    <div class="modal-body" id="body_style">
                        
                       
                        <h2>Personal Details</h2>
                        <hr>
                        <br>
                        <h4>User Name:</h4>
                        <br>
                        <h4>User E-mail:</h4>
                        <br>
                        <h4>User Mobile Number:</h4>
                        <br>
                         <h2>Personal Details</h2>
                        <hr>
                        <br>
                        <h4>Garage Name:</h4>
                        <br>
                        <h4>Garage E-mail:</h4>
                        <br>
                        <h4>Garage Mobile Number:</h4>
                        <br>
                        </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                            </div>
                
                        

                    </div>
                    <div class="modal-footer" id="footer_style">
                        <h2 style="text-align: left; padding-bottom: -15px;">Click here to edit your profile:</h2>
                        <button class="btn btn-success" style="padding-left: -30px; padding-right: -30px;" href="profile_edit.html">Edit</button>
                    </div>
                </div>
                            
            </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->

</div>
<!--/.container-->
  </body>

    <script type="text/javascript" href="../static/bootstrap/js/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
