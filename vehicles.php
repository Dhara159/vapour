
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
        <li class="active"><a href="vehicles.php"><span class="glyphicon glyphicon-log-in"></span> Vehicles</a></li>
        <li><a href="history.php"><span class="glyphicon glyphicon-log-in"></span> History</a></li>
        <li><a href="notification.php"><span class="glyphicon glyphicon-log-in"></span> Notification</a></li>
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
    </div>
  </div>
<div class="container">
	<table border="1">
		<thead><h1>Added Vehicles</h1></thead>
		<tbody>
			<tr>
				<th>Name</th>
				<th>Vehicle Type</th>
				<th>Vehicle Model</th>
				<th>Vehicle Number</th>
				<th>Date of Purchase</th>
			</tr>
			<?php
				$vehicle_data = $_SESSION["vehicleData"];
				for ($i=0; $i < count($vehicle_data); $i++) 
				{ ?>
					<tr>
						<td><?php echo $vehicle_data[$i][2] ?></td>
						<td><?php echo $vehicle_data[$i][3] ?></td>
						<td><?php echo $vehicle_data[$i][4] ?></td>
						<td><?php echo $vehicle_data[$i][5] ?></td>
						<td><?php echo $vehicle_data[$i][6] ?></td>
					</tr>
				<?php }
			?>
		</tbody>
	</table>
  <br>
  <h1>Add Vehicle</h1>
	<form action="save_vehicle.php" method="post">
		<label>Name: </label>
		<input type="text" name="name" id="name">
		<br>
		<label>Vehicle Type: </label>
        <input type="radio" name="type" id="four_wheel" value="four_wheel">
        <label>4 wheeler</label>
       	<input type="radio" name="type" id="two_wheel" value="two_wheel">
        <label>2 wheeler</label>
        <br>
        <label>Vehicle Model: </label>
        <input type="text" name="model" id="model">
        <br>
        <label>Vehicle Number: </label>
        <input type="text" name="v_num" id="v_num">
        <br>
        <label>Date of purchase</label>
        <input type="date" name="dop" id="dop">
        <br>
        <input type="submit" name="submit" value="Add">
	</form>
</div>
 <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>
