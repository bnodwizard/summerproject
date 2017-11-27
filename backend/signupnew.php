



<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	
		

     <!-- start: CSS -->
    <link href="../rainbow/css/bootstrap.css" rel="stylesheet">
    <link href="../rainbow/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../rainbow/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    

</head>
<body>
<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container" style="opacity: 0.8;position: fixed;margin-right: 500px;">
			
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
										<li ><a href="../rainbow/services.php">Services</a></li>
										
			              				<li><a href="../rainbow/contact.php">Contact</a></li>
			              				<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                				<?php
			                				if (isset($_SESSION['user'])) {
			                					echo"<li><a href='../rainbow/profile.php'>".$_SESSION['user']."</a></li>";
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
	<div class="container" style="float: left; margin-left: 520px;width:300px";>
			<?php
					// check for a successful form post
					if (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
					
			?> 

      

    </div>

<div class="container" style=" margin-top: 30px; width: 350px;">
			<div class="row main" >
				 

				<div class="main-login main-center" style="background-color: white;">
					<form class="form-horizontal" method="post" action="signup.php">
						
						<div class="form-group" >
							
							<div class="cols-ln-10"><h2 class="title" align="center">Please signup.</h2></div>
								<div class="input-group">
									

									<input type="text" class="input-block-level" name="name" pattern="[A-z ]{3,}" title="Please enter a valid Name." placeholder="Fullname" required>
								</div><br>
								<div class="input-group">
									
									<input type="email" class="input-block-level" name="email"  title="Please enter a valid username." placeholder="Email" required>
								</div>
							
						</div>
						<br>
						<div class="form-group">
							
							
								
							
						</div>
						
						<div class="form-group">
							
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="input-block-level" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." placeholder="User ID" required>

								</div>
							
						</div>
						<br>
						<div class="form-group">
							
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="input-block-level" name="password" placeholder="Password" required>
								</div>
						
						</div>
						<br>
						<div class="form-group">
							
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></span>
									<input type="text" class="input-block-level" name="address" placeholder="Address" required>
								</div>
							
						</div>
						<br>
						<div class="form-group">
							
							
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
									<input type="text" class="input-block-level" name="mobile" pattern=".{10}"  placeholder="Mobile number" maxlength="10" required/>
								</div>
							
						</div>
						<br>
						<div class="form-group ">
							<button type="submit" id="submit" value="submit" class="btn btn-info btn-md btn-block login-button">Register</button>
							<button type="reset" class="btn btn-warning btn-md btn-block login-button">
			<i ></i> Clear
		</button>
						</div>
						<center>
						<div class="already">
			            Already have an account?
			            <a href="login.php">Sign in</a>
			        </div>
			        </center>
					</form>
				</div>
			</div>
		</div>


	
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
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
<script def src="../rainbow/js/custom.js"></script>
<!-- end: Java Script -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>

</body>
</html>