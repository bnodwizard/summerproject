<?php session_start();
?>
<HTML>

	<HEAD>

			 <!-- start: CSS -->
	    <link href="../rainbow/css/bootstrap.css" rel="stylesheet">
	    <link href="../rainbow/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="../rainbow/css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
		<!-- end: CSS -->

		
		<link rel="stylesheet" type="text/css" href="css/datepicker.css" />
		

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		
	</HEAD>

	<BODY>
	<header>
		
		<!--start: Container -->
		<div class="container" style="opacity: 0.8;position: fixed;z-index: 1">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="../rainbow/img/logo3.png" style="width: 190px;z-index: 1"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
						
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			        		<div class="container">
			          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			          			</a>
			          			<div class="nav-collapse collapse">
			            			<ul class="nav">
			              				<li><a href="../rainbow/index.php">Home</a></li>
			              				<li><a href="../rainbow/about.php">About Us</a></li>
										<li><a href="../rainbow/services.php">Services</a></li>
										
			              				<li><a href="../rainbow/contact.php">Contact</a></li>
			              				<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                				<?php
			                				if (isset($_SESSION['user'])) {
			                					echo"<li><a href='../backend/profile.php'>".$_SESSION['user']."</a></li>";
			                					echo "<li><a href='logout.php'>Logout</a></li>";
			                				}
			                				else {
			                					echo "<li><a href='../backend/login.php'>Signin</a></li>";
			                				}
												
												?>
			                  					
			                  					
			                  					
			                  					
			                				</ul>
			              				</li>
			            			</ul>
			          			</div>
			        		</div>
			      		</div>
			    	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>

<div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 500px;margin-top: 20px;border-radius: 10px;">
		
			<div class="row">
			<br><br>
			<h2 align="center">Your Information</h2>
			<br>
				<div class="span10" style=" margin-left: -120px;padding: 20px;margin-top: -20px;" >
					<?php
						$connection = mysql_connect('localhost','root','');
						if (!$connection)
						{
							die ("Could not connect to the database: <br />". mysql_error());
						}
						mysql_select_db('book');

					
						$select = "select * from register where userid = '". $_SESSION['user'] ."'";
						$query=mysql_query($select);
						$num_rows = mysql_num_rows($query);
						echo "<table align='center'>";
							while($row = mysql_fetch_array($query))
									{
							
											echo "<tr>";
											echo "<td><strong>Userid</strong>:  </td><td>".$row['userid']."</td>";
											echo "</tr><tr><td><strong>Name:</strong> </td><td>".$row['name']."</td></tr>";
											echo "<tr><td><strong>Email:</strong> </td><td>".$row['email']."</td></tr>";
											
											echo "<tr><td><strong>Address:</strong> </td><td>".$row['address']."</td></tr>";
											echo "<tr><td><strong>Contact:</strong></td><td> ".$row['contact']."</td></tr>";
										}
						echo "</table>";
					?>
				</div>
			</div>
		</div>


	
	
		<br><br><br>
		<div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 1100px;border-radius: 10px;">
		
			<div class="row">
			<h1 align="center">Your Booked Tickets</h1>
				<div class="span10">
					<?php
						$connection = mysql_connect('localhost','root','');
						if (!$connection)
						{
							die ("Could not connect to the database: <br />". mysql_error());
						}
						mysql_select_db('book');

					
						$select = "select * from seat where userid = '". $_SESSION['user'] ."'";
						$query=mysql_query($select);
						$num_rows = mysql_num_rows($query);
						if ( $num_rows==0 )
						{
							
							echo "<div class='alert alert-warning' align='center' style='margin-left:300px;'>
  <strong>No thing to display!</strong> You have not booked any ticket yet!!
</div>";
						}
						else
						{
							echo "<form action='cancelled.php' method='POST' onsubmit='return validateCheckBox();'>";
							
								echo "<table align='center' class='table table-hover table-striped span6' >";
									echo "<thead>";
										echo "<tr>";
											echo "<th>Select</th>";
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
								
									while($row = mysql_fetch_array($query))
									{
										echo "<tr>";
											echo "<td><input type='checkbox' name='formSeat[]' value='".$row['PNR']."'/></td>";
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
									echo "<tr>";
										echo "<td>";
										echo "</td>";
										echo "<td>";
											echo '<button type="submit" name="formSubmit" class="btn btn-danger">';
												echo '<i class="icon-remove icon-white"></i> Remove';
											echo '</button>';
										echo "</td>";
										echo "<td>";
											echo '<button type="reset" class="btn">';
												echo '<i class="icon-refresh icon-black"></i> Clear';
											echo '</button>';
										echo "</td>";
										echo "<td>";
										echo "</td>";
									echo "</tr>";
									echo "</tbody>";
								echo "</table>";
								
							echo "</form>";
						}
						?>
					
				</div>
			</div>
		</div>

		
		
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				&copy; 2017, Rainbow Safari Tours and Travels
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../rainbow/js/jquery-1.8.2.js"></script>
<script src="../rainbow/js/bootstrap.js"></script>
<script src="../rainbow/js/flexslider.js"></script>
<script src="../rainbow/js/carousel.js"></script>
<script src="../rainbow/js/jquery.cslider.js"></script>
<script src="../rainbow/js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>

</html>
