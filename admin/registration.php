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
	                 <h1><a href="index.html">Admin Panel</a></h1>
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
                    <li><a href="packageorder.php"><i class="glyphicon glyphicon-user"></i> Orders</a></li>
                    
                   
                </ul>
             </div>
		  </div>
		  
		</div>
    </div>

 <div class="content-box-large" style="margin-left: 220px;margin-top: -308px;">
  				<div class="panel-heading">
					<div class="panel-title">Registration</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						
  					
     <?php
					    $connection = mysql_connect('localhost','root','');
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('book');
					
						$query = "select * from register";
						$result = mysql_query($query);
						
						
								echo "<table align='center' class='table table-hover table-striped' id='example' style='margin-top:-200px;'>";
									echo "<thead>";
										echo "<tr>";
											
											echo "<th>User ID</th>";
											echo "<th>Name</th>";
											echo "<th>Email</th>";
											echo "<th>Password</th>";
											echo "<th>Address</th>";
											echo "<th>Contact</th>";
											echo "<th>Date of join</th>";
											
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysql_fetch_array($result))
									{
										echo "<tr>";
											
											echo "<td>". $row['userid'] ."</td>";
											echo "<td>". $row['name'] ."</td>";
											echo "<td>". $row['email'] ."</td>";
											echo "<td>". $row['password'] ."</td>";
											echo "<td>". $row['address'] ."</td>";
											echo "<td>". $row['contact'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
											
										echo "</tr>";				
								}
									echo "</tbody>";
								echo "</table>";
							echo "</form>";
						
					?>


</div>
  				</div>
  			</div>



   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	





  </body>
</html>