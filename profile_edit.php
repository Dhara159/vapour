
<?php
  session_start();
  if (!isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == FALSE) 
  {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BI | profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../static/custom-top-header.css">
    <script type="text/javascript" href="custom-navbar.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../static/images/final-logo-without-text.png" width="55px" height="55px" style="margin-top: -15px;"></a><h4 style="margin-top: 10px; color: #208dbf">Bellwether Investments</h4>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav" id="right-sided">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="client_logout.html">Logout</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar -->

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-4 col-sm-2 sidebar-offcanvas navbar-custom" id="sidebar" role="navigation">
            <div class="sidebar-nav">
                <ul class="nav">
                    <li><a href="client_dashboard.php">Dashboard</a></li>
                    <li><a href="live_feeding.html">Live Feeding</a></li>
                    <li class="active"><a href="historic_data.html">Historic Datas</a></li>
                    <li><a href="historic_graph">Historic Graphs</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="algorithms.html">Prediction Algorithms</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="order_details.html">Order Details</a></li>
                    <li><a href="but_sell.html">Buy Or Sell</a></li>
                    <li><a href="client_profile.php">Profile</a></li>
                </ul>
            </div>
            <!--/.well -->
        </div>
        <!--/span-->

            <div class="col-xs-8 col-sm-8" style="margin-top: 15px;">
                <div class="modal-content">
                <div class="modal-header">
                    Edit your Profile here: 
                </div>
                <br>
                <div class="modal-body">
                <form action="historic_graph_search">
                  <div class="form-group">
                    <label for="trade" class="bmd-label-floating">Trade Name:</label>
                    <input type="text" class="form-control" name="trade">
                    <span class="bmd-help">Please enter name of trade. It must be stock market compatiable and no lesser than two letters</span><br>
                    <span class="bmd-help">And this would probably give all possible data for that particular trade. Data might be delayed by 15 minutes.</span>
                    <br>
                    <label for="attribute" class="bmd-label-floating">Attribute:</label>
                    <input type="text" class="form-control" name="attribute">
                    <br>                    
                    <label for="sdate" class="bmd-label-floating">Start Date:</label>
                    <input type="date" class="form-control" name="sdate">
                    <br>
                    <label for="edate" class="bmd-label-floating">End Date:</label>
                    <input type="date" class="form-control" name="edate">
                  </div>
                  <button type="submit" name="submit" class="next action-button" value="Search" >Search</button>
                </form>    
                </div>
                
                <div class="modal-footer">
                    <h4>Table will show you all details of trade which you selected.</h4>
                    
                </div>
                </div>
            </div>
            <!--/span-->
        </div>
        <!--/row-->

</div>
<!--/.container-->
  </body>
</html>
