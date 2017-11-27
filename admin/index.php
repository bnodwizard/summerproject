<?php
session_start();

if (!isset($_SESSION['name'])) {
header('Location: login.php');	
}

?>
<!DOCTYPE html>
<html>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

    
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Admin Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.php"><?php echo $_SESSION['name'];?></a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="booking.php"><i class="glyphicon glyphicon-list"></i> Ticket Booking</a></li>
                    <li><a href="registration.php"><i class="glyphicon glyphicon-record"></i> Registration</a></li>
                    <li><a href="package.php"><i class="glyphicon glyphicon-tasks"></i> Post Package</a></li>
                    <li><a href="packageorder.php"><i class="glyphicon glyphicon-user"></i> Orders </a></li>
                    
                </ul>
             </div>
		  </div>
		  <div class="col-md-2">
		  	<div class="row" >
		  		

		  				<div class="col-md-12" >
		  					<div class="content-box-header" style="border-color:#6666ff";>
			  					<div class="panel-title">Registration</div>
								
								<div class="panel-options">
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header" style="border-color:#6666ff";>
				  				
								
								<?php
					    $connection = mysql_connect('localhost','root','');
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('book');
					
						$query = "SELECT COUNT(*) FROM register";

						$result = mysql_query($query);
						
						
								if ( $result ) {
    $total = mysql_result($result, 0);
}


echo "<span style='color:#6666ff;font-size:100px;font-family:Garamond;'><b>".$total."</b></span>";
								

echo "Registrations";	
					?>


				
								
							</div>
		  				</div>
		  			</div>
		  			</div>
		  			<div class="col-md-2" >
		  	<div class="row" >
		  		

		  				<div class="col-md-12"  >
		  					<div class="content-box-header" style="border-color:#88cc00";>
			  					<div class="panel-title" >Reservation</div>
								
								
				  			</div>
				  			<div class="content-box-large box-with-header" style="border-color:#88cc00";>
				  				
								
								<?php
					 $todaydate=date("Y-m-d");
					    $connection = mysql_connect('localhost','root','');
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('book');
					
						$query = "SELECT COUNT(*) FROM seat where date = '" . $todaydate . "'";

						$result = mysql_query($query);
						
						
								if ( $result ) {
    $total = mysql_result($result, 0);
}

echo "<span style='color:#88cc00;font-size:100px;font-family:Garamond;'><b>".$total."</b></span>";
								
echo "Todays Reserved";	
					?>


				
								
							</div>
		  				</div>
		  			</div>
		  			</div>

		  			<div class="col-md-2">
		  	<div class="row" >
		  		

		  				<div class="col-md-12" >
		  					<div class="content-box-header" style="border-color:#e6ac00";>
			  					<div class="panel-title">Reservation</div>
								
								<div class="panel-options">
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header" style="border-color:#e6ac00";>
				  				
								
									<?php
					 $todaydate=date("Y-m-d");
					    $connection = mysql_connect('localhost','root','');
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('book');
					
						$query = "SELECT COUNT(*) FROM seat";

						$result = mysql_query($query);
						
						
								if ( $result ) {
    $total = mysql_result($result, 0);
}

echo "<span style='color:#e6ac00;font-size:100px;font-family:Garamond;'><b>".$total."</b></span>";
								
echo "Total Reservation";	
					?>


				
								
							</div>
		  				</div>
		  			</div>
		  			</div>

		  			<div class="col-md-2">
		  	<div class="row" >
		  		

		  				<div class="col-md-12" >
		  					<div class="content-box-header" style="border-color:#cc0099";>
			  					<div class="panel-title">Booking</div>
								
								<div class="panel-options">
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header" style="border-color:#cc0099";>
				  				
								
							

				
					  	<?php
					 $todaydate=date("Y-m-d");
					    $connection = mysql_connect('localhost','root','');
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('admin');
					
						$query = "SELECT COUNT(*) FROM packagebook";

						$result = mysql_query($query);
						
						
								if ( $result ) {
    $total = mysql_result($result, 0);
}

echo "<span style='color:#cc0099;font-size:100px;font-family:Garamond;'><b>".$total."</b></span>";
								
echo "Package Booked";	
					?>

				
								
							</div>
		  				</div>
		  			</div>
		  			</div>
		  		<div class="col-md-2">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header" style="border-color:#ff1a1a";>
			  					<div class="panel-title">Current Time</div>
								
								
				  			</div>
				  			<div class="content-box-large box-with-header" style="border-color:#ff1a1a";>
		  					<div class="content-box-header">
				  				<font style="font-size:26px;color:grey;"><b>
					  			<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>


</head>

<body onload="startTime()">

<div id="txt"></div><?php echo  date("Y-m-d") ;?>
						</b></font>		<br /><br />
							</div>
		  				</div>
		  			</div>
		  			</div>
		  			
		  		</div>
		  	</div>

		  	

		  	
		  </div>
		</div>
    </div>


   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">





  </body>
</html>