<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	
    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container" style="opacity: 0.8;position: fixed;z-index:1;">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="img/logo3.png" style="width: 190px;"></a>
						
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
			                					echo "<li><a href='../logout.php'>Logout</a></li>";
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

	<!-- start: Map -->
	<div>
	
<div id="googleMap" style="float: right; margin-right:170px;margin-top: 50px;padding: 40px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.0340308462978!2d85.31244812919604!3d27.71308309892437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fd8fd9f8e9%3A0xee5e71ae47e52fdf!2sRainbow+Safari+Tour+%26+Travel+P.Ltd!5e0!3m2!1sen!2snp!4v1503053922182" width="930" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
		<!-- end: Google Maps -->
	</div>
	<!-- end: Map -->	
	
	<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container" >
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				<div class="span" style="border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px; width: 500px;">
					<div class="title"><h3>Contact Info</h3></div>
					<p>
						<font size="4px"><center><b>Rainbow Safari Tours & Travels p. Ltd.</b></center></font>
</p>
<pre>
kathmandu Office
p.o.Box 9350
Brahama kumaris Marga Jyatha, Thamel, Kathmandu,Nepal

Tel: +977-1-4228647,4254249

Mob: 9851016971,9851001213

Fax: +977-1-4247384
 </pre>
 <pre>

<b>Chitwan Branch</b>
Sauraha Gate, Chitwan ,Nepal
Tel : +977-1-056-561217
Mob: 9755000217,9855061217
E-mail : info@rainbowtours.com.np,
rainbowtravel747@hotmail.com
Website :www.rainbowtours.com.np
 
</pre>
<pre>
Messenger ID
Yahoo : keshavda
Hotmail : rainbowadv
G-talk : keshavsu
Skype: rainbowadv1
					</pre>
				</div>
				<!-- end: Contact Info -->		

				<!-- start: Contact Form -->
				<div class="span" style="float: right;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px;width: 320px;">
					<div class="title"><h3>Contact Form</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Send message</button>
								</div>
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->

				</div>
				<!-- end: Contact Form -->

				<!-- start: Social Sites -->
				
				<!-- end: Social Sites -->
			
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
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

							<li><a href="index.html">Start</a></li>

							<li><a href="about.html">About</a></li>

							<li><a href="services.html">Services</a></li>

							<li><a href="pricing.html">Pricing</a></li>

							<li><a href="contact.html">Contact</a></li>

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
	
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				&copy; 2017, Admin. 
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