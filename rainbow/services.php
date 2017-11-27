<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	<meta name="description" content="GotYa Free Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
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
		<div class="container" style="opacity: 0.8;position: fixed;z-index:3;">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="img/logo3.png" style="width: 190px;"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9" >
						
					<div class="navbar navbar-inverse" >
			    		<div class="navbar-inner" >
			        		<div class="container">
			          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			          			</a>
			          			<div class="nav-collapse collapse">
			            			<ul class="nav">
			              				<li><a href="index.php">Home</a></li>
			              				<li><a href="about.php">About Us</a></li>
										<li ><a href="services.php">Services</a></li>
										
			              				<li><a href="contact.php">Contact</a></li>
			              				<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                				<?php
			                				if (isset($_SESSION['user'])) {
			                					echo"<li><a href='../backend/profile.php'>".$_SESSION['user']."</a></li>";
			                					echo "<li><a href='../	logout.php'>Logout</a></li>";	
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
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div  style="z-index: -1; width: 945px; float: right; margin-right: 200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-settings ico-white" ></i>Services</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper"	>
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Row -->
      		<div class="row" style="margin-top: 100px;">
      		<?php
				         if (isset($_SESSION['user'])) {
				                					echo"<a href='../backend/index.php'>";
				                				}
				                				else {
				                					echo "<a href='../backend/login.php'>";
				                				}
				                				?>
				
        		<div class="span4">
          			<div class="icons-box">
						<img src="img/ticket.png" style="border-radius: 300px;">
						<div class="title"><h3>Bus Ticket Booking</h3></div>
						<p>
							Our luxury tourist bus is accommodated with 35 comfortable seats .
						</p>
						<div class="clear"></div>
					</div>
        		</div></a>
        		<a href="currency.php">
        		<div class="span4">
          			<div class="icons-box">
						<img src="img/currency.png" style="border-radius: 300px;">
						<div class="title"><h3>Currency Exchange</h3></div>
						<p>
							We exchange  Nepali currency for any another currency in a best and affective manner.


						</p>
						<div class="clear"></div>
					</div>
        		</div>
        		</a>
        		<a href="index.php">
        		<div class="span4">
          			<div class="icons-box">
						<img src="img/tour.png" style="border-radius: 300px; width: 130px;height: 130px;">
						<div class="title"><h3>Tour Packages</h3></div>
						<p>
							We provide cheap rate tour packages for everyone in  effective manner.


						</p>
						<div class="clear"></div>
					</div>
        		</div>
        		</a>
        		
      		</div>
			<!-- end: Row -->
      	
		</div>
		<!--end: Container-->
				
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="index.php">Start</a></li>

							<li><a href="about.php">About</a></li>

							<li><a href="services.php">Services</a></li>

							<li><a href="currency.php">Currency</a></li>
							
							<li><a href="contact.php">Contact</a></li>

						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		
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
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>