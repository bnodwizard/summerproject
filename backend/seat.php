
<HTML>


<?php
	
		session_start();
	$connection = mysql_connect('localhost','root','');
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysql_select_db('book');
?>



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
		<title>Bus Ticket Booking</title>
		
		
	</HEAD>

	<BODY>
	<header>
		
		<!--start: Container -->
		<div class="container" style="opacity: 0.8;position: fixed;z-index: 1;">
			
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
			                					echo"<li><a href='profile.php'>".$_SESSION['user']."</a></li>";
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

	
		<div class="container" style="margin-top: 50px; width: 700px;">
			<div class="row well" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<div class="span10" style="width: 200px;" >
					<form action="book.php" method="POST" onsubmit="return validateCheckBox();">
					<span style="margin-left: 30px;"><font size="6px;">A</font> </span>
					<span style="margin-left: 80px;"><font size="6px;">B</font> </span>
						<ul class="thumbnails">

						<?php
							$count=0;
							$date = strip_tags( utf8_decode( $_POST['doj'] ) );
							$from = strip_tags( utf8_decode( $_POST['from'] ) );
							$to = strip_tags( utf8_decode( $_POST['to'] ) );
							$query = "select * from seat where date = '" . $date . "' and froma='".$from."' and toa ='".$to."'";
							$result = mysql_query($query);

							if ( mysql_num_rows($result) == 0 )
							{
								for($i=1; $i<35; $i++)
								{
									echo "<li class='span1' style='width:30px; height:20px;'>";
										echo "<a href='#'  title='Available'>";
											echo "<img src='img/available.png' alt='Available Seat'/>";
											echo "<label class='checkbox' >";
												echo "<div class='checkbox' style='margin-left:-12;margin-top:-10px;color:Green;' ><input type='checkbox' class='checkbox checkbox-success' name='ch".$i."' />".$i;
												echo "</div>";
											echo "</label>";
										echo "</a>";
									echo "</li>";
										
																
								}
							}
							else
							{
								$seats = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
								while($row = mysql_fetch_array($result))
								{
									$pnr = explode("-", $row['PNR']);
									$pnr[3] = intval($pnr[3]) - 1;
									$seats[$pnr[3]] = 1;
								}
								for($i=1; $i<35; $i++)
								{
									$j = $i - 1;
									if($seats[$j] == 1)
									{
										echo "<li class='span1' style='width:30px; height:20px;'>";
											echo "<a href='#' title='Booked'>";
												echo "<img src='img/occupied.png' alt='Booked Seat'/>";
												echo "<label class='checkbox'>";
													echo "<div class='checkbox' style='margin-left:-12;margin-top:-10px;color:red;' ><input type='checkbox' name='ch".$i."' disabled/>".$i;
													echo "</div>";
												echo "</label>";
											echo "</a>";
										echo "</li>";
										$count=$count+1;
										
										if($count==34){
											echo "<span class=\"alert alert-error\" style='float:right;width:345px;margin-right:-430px;'>Sorry all seats are taken please go back to select diffferent date.</span>";

										}
										
									}

									else
									{
										echo "<li class='span1' style='width:30px; height:20px;'>";
											echo "<a href='#' title='Available'>";
												echo "<img src='img/available.png' alt='Available Seat'/>";
												echo "<label class='checkbox'>";
													echo "<div class='checkbox' style='margin-left:5px;margin-top:-32px;color:Green;' ><input type='checkbox' name='ch".$i."'/>".	$i;
													
												echo "</label>";
											echo "</a>";
										echo "</li>";

									}
																	
								}
								}									
								
							
						?>
						</ul>
						
						
							
							
							</div>
							<div style="margin-left: 200px;margin-top: 50px;">
							<br><br>
							
							<center>
							<label style="font-size: 15px;"><b>Date and Departure</b></label>
							<?php
								echo "<input type='text' class='span2' name='doj' value='". $date ."' readonly/>";
								echo "  From ";
								echo "<input type='text' class='span2' name='from1' value='". $from ."' readonly/>";
								echo "  To ";
								echo "<input type='text' class='span2' name='to1' value='". $to ."' readonly/>";
								?><br>
								<div>
									
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							<a href="./index.php" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i> Back </a>
						</center>
						</div>
						<div style="float: right; margin-right: 170px; margin-top: 20px;"><img src='img/available.png' alt='Available Seat'/>  Available Seat</div>
						<div style="float: right; margin-right: 170px; "><img src='img/occupied.png' alt='Occupied Seat'/> Occupied Seat</div>
						</div>
					</form>
				
			</div>

		</div>

			
		
		

    


	<!-- start: Footer -->
	

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
	<div id="snackbar">Please Select Atleast One Seat!!</div>
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->



     

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<!-- end: Java Script -->



     


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
				var x = document.getElementById("snackbar")
   									x.className = "show";
    								setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				//alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
		<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: red;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
	</BODY>
</HTML>