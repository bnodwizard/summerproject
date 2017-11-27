<?php
session_start();

if (!isset($_SESSION['name'])) {
header('Location: login.php');	
}
?>
<?php


$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');



	
// get the posted data
$search = strip_tags( utf8_decode( $_POST['search'] ) );


					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('book');
					
						$query = "select * from seat where date = '" . $search . "'";
						$result = mysql_query($query);
						
						
								echo "<table align='center' class='table table-hover table-striped' id='example' align='center' width='75%'>";
									echo "<thead>";
										echo "<tr>";
											
											echo "<th>Seat Number</th>";
											echo "<th>Name</th>";
											echo "<th>Email</th>";
											echo "<th>Address</th>";
											echo "<th>Contact</th>";
											echo "<th>Message</th>";
											echo "<th>PNR</th>";
											echo "<th>Date</th>";
											echo "<th>From</th>";
											echo "<th>To</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysql_fetch_array($result))
									{
										echo "<tr>";
											
											echo "<td>". $row['number'] ."</td>";
											echo "<td>". $row['name'] ."</td>";
											echo "<td>". $row['email'] ."</td>";
											echo "<td>". $row['address'] ."</td>";
											echo "<td>". $row['contact'] ."</td>";
											echo "<td>". $row['message'] ."</td>";
											echo "<td>". $row['PNR'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
											echo "<td>". $row['froma'] ."</td>";
											echo "<td>". $row['toa'] ."</td>";
										echo "</tr>";				
								}
									echo "</tbody>";
								echo "</table>";
							
						

?>

<!DOCTYPE html>
<html>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    
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
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                  <form action="searchbooking.php" method="POST">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="submit">Search</button>
	                       </span>
	                       </form>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
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
                   
                </ul>
             </div>
		  </div>
		  
		</div>
    </div>

<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Todays booking</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						
  					
    <?php
					    $connection = mysql_connect('localhost','root','');
					    $todaydate=date("Y-m-d");
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('book');
					
						$query = "select * from seat where date = '" . $todaydate . "'";
						$result = mysql_query($query);
						
						
								echo "<table align='center' class='table table-hover table-striped' id='example' align='center' width='75%'>";
									echo "<thead>";
										echo "<tr>";
											
											echo "<th>Seat Number</th>";
											echo "<th>Name</th>";
											echo "<th>Email</th>";
											echo "<th>Address</th>";
											echo "<th>Contact</th>";
											echo "<th>Message</th>";
											echo "<th>PNR</th>";
											echo "<th>Date</th>";
											echo "<th>From</th>";
											echo "<th>To</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysql_fetch_array($result))
									{
										echo "<tr>";
											
											echo "<td>". $row['number'] ."</td>";
											echo "<td>". $row['name'] ."</td>";
											echo "<td>". $row['email'] ."</td>";
											echo "<td>". $row['address'] ."</td>";
											echo "<td>". $row['contact'] ."</td>";
											echo "<td>". $row['message'] ."</td>";
											echo "<td>". $row['PNR'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
											echo "<td>". $row['froma'] ."</td>";
											echo "<td>". $row['toa'] ."</td>";
										echo "</tr>";				
								}
									echo "</tbody>";
								echo "</table>";
							
						
					?>

</div>
  				</div>
  			</div>

    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">All Information</div>
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
					
						$query = "select * from seat";
						$result = mysql_query($query);
						
						
								echo "<table align='center' class='table table-striped table-bordered' id='example' align='center' width='75%'>";
									echo "<thead>";
										echo "<tr>";
											
											echo "<th>Seat Number</th>";
											echo "<th>Name</th>";
											echo "<th>Email</th>";
											echo "<th>Address</th>";
											echo "<th>Contact</th>";
											echo "<th>Message</th>";
											echo "<th>PNR</th>";
											echo "<th>Date</th>";
											echo "<th>From</th>";
											echo "<th>To</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysql_fetch_array($result))
									{
										echo "<tr>";
											
											echo "<td>". $row['number'] ."</td>";
											echo "<td>". $row['name'] ."</td>";
											echo "<td>". $row['email'] ."</td>";
											echo "<td>". $row['address'] ."</td>";
											echo "<td>". $row['contact'] ."</td>";
											echo "<td>". $row['message'] ."</td>";
											echo "<td>". $row['PNR'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
											echo "<td>". $row['froma'] ."</td>";
											echo "<td>". $row['toa'] ."</td>";
										echo "</tr>";				
								}
									echo "</tbody>";
								echo "</table>";
							echo "</form>";
						
					?>

</div>
  				</div>
  			</div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 <a href='#'>Admin</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>





  </body>
</html>