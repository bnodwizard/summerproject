<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	
	<meta charset="utf-8">
	
	<!-- end: Meta -->
	
	
	
	
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
		<div class="container" style="opacity: 0.8;position: fixed;z-index:1;">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="img/logo3.png" style="width: 190px;z-index: 1"></a>
						
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
										<li><a href="services.php">Services</a></li>
										
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
	
	<!-- start: Page Title -->
	<div style="z-index: -1; width: 945px; float: right; margin-right: 200px;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>About Us</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px; border-radius: 20px;">
				
		<!--start: Container -->
    	<div class="container">
	
			<!--start: Row -->
	    	<div class="row">
		
				<div class="span8">
					
					<!-- start: About Us -->
					<div id="about" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px;margin-top: 20px;border-radius: 8px;">
						<div class="title"><h3>About Us</h3></div>
						<p align="justify">
							We are also pleased to inform you that we, Rainbow Group of Company have been opened an office in Kathmandu, Pokhara & Chitwan, Nepal.

							We organize different tours and transport services for for all the visitors in and out of Nepal. we provide plane tickets of different national and international airlines, bus tickets all over the nepal and train tickets from nepal to india within different routes aviliable.

							We are able to provide to our overseas Agencies a wide range of service includes Hotel reservation, Air Ticketing ( Domestic & International ), Package tour, Chitwan Wildlife package Tour, Trekking in Himalaya, Peak Climbing, Expedition, sightseeing tour and many more.

							Should you have any clients who desire to visit Nepal, please do not hesitate to inform us. We are also expecting your valuable clients to visit to our destination.

							Should you have any further inquiries, please feel free to contact us any time. We look forward to hearing from your good news.
						</p>
						<p align="justify">
							We are also pleased to inform you that we, Rainbow Group of Company have been opened an office in Kathmandu, Pokhara & Chitwan, Nepal.

							We organize different tours and transport services for for all the visitors in and out of Nepal. we provide plane tickets of different national and international airlines, bus tickets all over the nepal and train tickets from nepal to india within different routes aviliable.

							We are able to provide to our overseas Agencies a wide range of service includes Hotel reservation, Air Ticketing ( Domestic & International ), Package tour, Chitwan Wildlife package Tour, Trekking in Himalaya, Peak Climbing, Expedition, sightseeing tour and many more.

							Should you have any clients who desire to visit Nepal, please do not hesitate to inform us. We are also expecting your valuable clients to visit to our destination.
						</p>
						<p align="justify">
							We are also pleased to inform you that we, Rainbow Group of Company have been opened an office in Kathmandu, Pokhara & Chitwan, Nepal.

							We organize different tours and transport services for for all the visitors in and out of Nepal. we provide plane tickets of different national and international airlines, bus tickets all over the nepal and train tickets from nepal to india within different routes aviliable.

							We are able to provide to our overseas Agencies a wide range of service includes Hotel reservation, Air Ticketing ( Domestic & International ), Package tour, Chitwan Wildlife package Tour, Trekking in Himalaya, Peak Climbing, Expedition, sightseeing tour and many more.

							Should you have any clients who desire to visit Nepal, please do not hesitate to inform us. We are also expecting your valuable clients to visit to our destination.
						</p>
						<p align="justify">
							We are also pleased to inform you that we, Rainbow Group of Company have been opened an office in Kathmandu, Pokhara & Chitwan, Nepal.

							We organize different tours and transport services for for all the visitors in and out of Nepal. we provide plane tickets of different national and international airlines, bus tickets all over the nepal and train tickets from nepal to india within different routes aviliable.

							We are able to provide to our overseas Agencies a wide range of service includes Hotel reservation, Air Ticketing ( Domestic & International ), Package tour, Chitwan Wildlife package Tour, Trekking in Himalaya, Peak Climbing, Expedition, sightseeing tour and many more.

							Should you have any clients who desire to visit Nepal, please do not hesitate to inform us. We are also expecting your valuable clients to visit to our destination.
						</p>
					</div>	
					<!-- end: About Us -->

					
					<!-- start: Team -->	
					
				</div>	
				
				<div class="span4">
					
					<!-- start: Sidebar -->
					<div id="sidebar" style="height: 835px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px;margin-top: 20px;border-radius: 8px;">

						
				        	
						<!-- start: Tabs -->
						<div class="title"><h3>Routes</h3></div>

						<ul class="tabs-nav">
							<li class="active"><a href="#tab1"><i class="mini-ico-glass"></i></a></li>
							<li><a href="#tab2"><i class="mini-ico-list"></i></a></li>
							<li><a href="#tab3"><i class="mini-ico-pencil"></i></a></li>
							<li><a href="#tab3"><i class="mini-ico-pencil"></i></a></li>
						</ul>

						<div class="tabs-container">
							<div class="tab-content" id="tab1">
							From Kathmandu To Chitwan
							Departure Time : 7 am
							Reporting Time : 6:30 am
							Place : Kantipath (Tourist Bus Stand)


							Cost per Person : US $ 6.00 
</div>
							<div class="tab-content" id="tab2">
							For Kathmandu From Chitwan
							Departure Time :9:30 am
							Reporting Time : 9:00am
							Place : Sauraha Tourist Bus Park


							Cost per Person : US $ 6.00
</div>
							<div class="tab-content" id="tab3">
							From Kathmandu To Pokhara
							Departure Time : 7 am
							Reporting Time : 6:30 am
							Place : Kantipath (Tourist Bus Stand)


							Cost per Person : US $ 7.00 
							</div>
							<div class="tab-content" id="tab3">
							For Kathmandu From Pokhara
							Departure Time : 7:30 am
							Reporting Time : 7:00 am
							Place :Tourist Bus Station Lakeside Pokhara 

							Cost per Person :US $ 7.00
							</div>
							</div>
						<!-- end: Tabs -->

						<!-- start: Testimonials-->

						<div class="testimonial-container">

							<div class="title"><h3>Destination</h3></div>

								<div class="testimonials-carousel" data-autorotate="3000">

									<ul class="carousel">

										<li class="testimonial">
											<div class="testimonials"><b><font size="3px" >Nepal</font></b><br><p align="justify">
Nepal, home to Mount Everest, is dominated by the majority of the world's most imposing mountains. A tiny country (147,181 square kilometers), 18 percent of its territory is occupied by the spectacular mountain range we know as The Himalayas.  Nepal was a mysterious land to the west for many centuries, it was closed to the outside world until 1951, this only added to its mystique. It has over the remaining years developed into both a very spiritual place to visit as well as being one of the most exiting destinations for adventure in the world. </p></div>
											<div class="testimonials-bg"></div>
											
										</li>

										<li class="testimonial">
											<div class="testimonials"><b><font size="3px">India</font></b><br><p align="justify">
Few countries in the world have a tradition, culture and variety as diverse as this multi-faceted land called India. Enriched by successive waves of migration and marauders from distant lands, every one of them left an indelible imprint which was absorbed into the Indian way of life. It is this variety which provides a breathtaking ensemble for experiences that is uniquely Indian. Underneath this diversity lies the continuity of Indian civilization and social structure from the very earliest times until the present day. Modern day India represents the largest democracy in the world with a seamless picture of unity in diversity unparalleled anywhere else. </p></div>
										

										

									</ul>

								</div>

							</div>

						<!-- end: Testimonials-->

					</div>
					<!-- end: Sidebar -->
					
				</div>
				
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container--><div class="row">
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
							
							<li><a href="contact.html">Contact</a></li>

						</ul>

					</div>
					
</div>
		<!--start: Container -->
    	<div class="container">	
      		
			<hr>
		
			<!-- start Clients List -->	
			
		
			
		
		</div>
		<!--end: Container-->	

	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

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