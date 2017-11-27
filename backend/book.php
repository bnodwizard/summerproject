
<!DOCTYPE HTML>
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
		
		
		
	</HEAD>

	<BODY>
	<header>
		
		<!--start: Container -->
		<div class="container" style="opacity: 0.8;position: fixed;z-index: 1">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img img src="../rainbow/img/logo3.png" style="width: 190px;z-index: 1"></a>
						
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
			                			
			                					echo"<li><a href='profile.php'>".$_SESSION['user']."</a></li>";
			                					echo "<li><a href='logout.php'>Logout</a></li>";
			                				
												
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

	<div class="container" style="margin-left: 400px; width: 500px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px; margin-top: 20px; border-radius: 10px;">
	        <div class="page-header">
	            <h1 align="center">Place Your Information</h1>
	        </div>

			<?php

					// check for a successful form post
					if (isset($_GET['s'])) 
					{
						echo "<div class=\"alert alert-success\">".$_GET['s']." You will be automatically redirected after 5 seconds.</div>";
//						echo "You will be automatically redirected after 5 seconds.";
						header("refresh: 5; index.php");
					}

					// check for a form error
					elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

			?> 
			<form name="contactForm" action="register.php" method="POST" class="form-horizontal">
				<div class='control-group'>
					<label class='control-label' for='input1'>Seat Numbers</label>
					<div class='controls'>
					<?php 
						for($i=1; $i<35; $i++)
						{
							$chparam = "ch" . strval($i);
							if(isset($_POST[$chparam]))
							{
								echo "<input type='text' class='span3' name=ch".$i." value=".$i." readonly/><br>";
							}
						}
					?>
	                </div>
	            </div>

	            <div class='control-group'>
					<label class='control-label' for='input1'>Depature</label>
					<div class='controls'>
					<?php 
							
								
								echo "<input type='text' class='span3' name='from2' value='".$_POST['from1']."'readonly><br><br>";
								echo "<input type='text' class='span3' name='to2' value='".$_POST['to1']."' readonly><br>";
								
							
						
					?>
	                </div>
	            </div>
	  
					<?php
						if(isset($_POST['doj']))
						{
							echo "<div class='control-group'>";
							echo "<label class='control-label' for='input1'>Date of Journey</label>";
								echo "<div class='controls'>";
									echo "<input type='text' name='journey_date' id='input1' class='span3' value=". $_POST['doj'] ." readonly />";
								echo "</div>";
							echo "</div>";
						}
					?>
	            
	            <div class="control-group">
	                <label class="control-label" for="input4">User ID</label>
	                <div class="controls">
	                    <input type="text" class="span3" placeholder="Type your user id" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." value="<?php echo $_SESSION['user']; ?>" readonly/>
	                </div>
	            </div>

				<div class="control-group">
	                <label class="control-label" for="input1">Name</label>
	                <div class="controls">
	                    <input type="text" name="user_name" id="input1" placeholder="Type your name" class="span3" pattern="[A-z ]{3,}" title="Please enter a valid name." required>
	                </div>
	            </div>
				
	            <div class="control-group">
	                <label class="control-label" for="input2">Address</label>
	                <div class="controls">
	                    <input type="text" name="address" id="input2" placeholder="Type your address" class="span3" required>
	                </div>
	            </div>

	            <div class="control-group">
	                <label class="control-label" for="input3">Contact Number (only 10 digits)</label>
	                <div class="controls">
	                    <input type="text" name="mobile" pattern=".{10}" title="Please enter 10 digit no." class="span3" placeholder="Type your mobile number" maxlength="10" required/>
	                </div>
	            </div>

	            <div class="control-group">
	                <label class="control-label" for="input5">Email ID</label>
	                <div class="controls">
	                    <input type="email" class="span3" placeholder="Type your email id" name="email" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" title="Please enter a valid email id." required/>
	                </div>
	            </div>
				

	            

	            

	            

	            <div class="control-group">
	                <label class="control-label" for="input6">Message</label>
	                <div class="controls">
	                    <textarea class="span3" rows="3" name="message" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,150}$" title="Please enter a valid message." ></textarea>
	                </div>
	            </div>

	            <div class="form-actions">
	                <input type="hidden" name="save" value="contact">
					<button type="submit" class="btn btn-info">
						<i class="icon-ok icon-white"></i> Book
					</button>
					<button type="reset" class="btn">
						<i class="icon-refresh icon-black"></i> Clear
					</button>
	            </div>

			</form>
		</div>


	

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
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	</BODY>
</HTML>