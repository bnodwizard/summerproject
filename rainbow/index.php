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
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
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

</head>
<body>
	
	<!--start: Header -->
	<header >
		
		<!--start: Container -->
		<div class="container"style="opacity: 0.8;position: fixed;z-index:1;" >
			
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
			    		<div class="navbar-inner">
			        		<div class="container" >
			          			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			            			<span class="icon-bar"></span>
			          			</a>
			          			<div class="nav-collapse collapse" style="color: red;">
			            			<ul class="nav" >
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
	<div style="float: right; width: 200px;">
	<?php
	if (isset($_GET['s'])) 
					{
						echo "<div class=\"alert alert-success\">".$_GET['s']." This message will dissappear in  seconds.</div>";

						header("refresh: 5; index.php");
					}

					// check for a form error
					elseif (isset($_GET['e'])){ echo "<div class=\"alert alert-error\">".$_GET['e']." This message will dissappear in 5 seconds.</div>";
					header("refresh: 5; index.php");
						}
			?> 
			</div>
				<div class="container">
				   
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				      <div class="item active">
				        <img src="img/slider/1.jpeg" alt="Los Angeles" style="width:1200px;height: 500px;">
				      </div>

				      <div class="item">
				        <img src="img/slider/2.jpg" alt="Chicago" style="width:1200px;">
				      </div>
				    
				      <div class="item">
				        <img src="img/slider/3.jpg" alt="New york" style="width:1200px;">
				      </div>
				    </div>

				    <!-- Left and right controls -->
				    
				    
				  </div>
				</div>



			
	<!--start: Wrapper-->
	<div id="wrapper" id="tourss">
				
		<!--start: Container -->
    	<div class="container">
	
      		
      		<div class="hero-unit">
        		<h1 align="center">Tour Packages</h1>
        		
      		</div>
			<!-- end: Hero Unit -->

      		<!-- start: Row -->
      		
      		<div class="row">
	





        		
						<?php

						$connection = mysql_connect('localhost','root','');
						if (!$connection)
						{
							die ("Could not connect to the database: <br />". mysql_error());
						}
						mysql_select_db('admin');  





							
						$select="SELECT * FROM `package`";
						$que=mysql_query($select);
						while ($arr=mysql_fetch_array($que)) {


							echo "<div class='span4'>
          				<div class='icons-box'>";
          			
						echo "<img src='../admin/uploads/".$arr['picture']."'  alt='image' style='border-radius:5px;' >";
						echo "<div class='title'><h3>".$arr['name']."</h3></div>
						<b>Price:</b> ".$arr['price']."<br>
						<b>Date:</b> ".$arr['date']."<br>	
						<p align='justify'>".$arr['message']."
						</p>
						<br>
						<button type='button' class='btn btn-default' align='center' data-toggle='modal' data-target='#myModal'>Order Package</button>";
						
						echo"<div class='clear'></div>
					</div>
					
        		</div>";
						}


						?>
						
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" ">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Place Your Detail Information</h4>
      </div>
      <div class="modal-body" align="center" >
        <p><form action="packagebook.php" method="POST">
									<fieldset>
									<div class="form-group">
									<select name="packagebook" required>
									<option value="0">Please Select Your Package</option>
									<?php
									$connection = mysql_connect('localhost','root','');
									if (!$connection)
									{
										die ("Could not connect to the database: <br />". mysql_error());
									}
									mysql_select_db('admin');  
									$select1="SELECT * FROM `package`";
									$que1=mysql_query($select);

									while($arr1=mysql_fetch_array($que1))

									{
										
									echo"<option>
									".$arr1['name']."_".$arr1['id']."
									</option>";
								}
									
									?>
									</select>
									</div>
										<div class="form-group">
											
											<input class="form-control" placeholder="Full Name" type="text" name="name" pattern="[A-z ]{3,}" title="Please enter a valid name."  required>
										</div>
										<div class='form-group'>
											
											<input class='form-control' placeholder='Contact Number' type='text' name='contact' pattern=".{10}" title="Please enter 10 digit no." class="span3" placeholder="Type your mobile number" maxlength="10" required>
										</div>
										<div class='form-group'>
											
											<textarea class='form-control' placeholder='Comment Area' rows='3' name='message' required></textarea>
										</div>
										<div><input type='checkbox' name='agree'/>  I accept every terms and conditions</div>
									</fieldset>
									<div>
										<div >
											<i class='fa fa-save'></i>
											<button type='submit' class='btn btn-primary' name='submit'>
											Submit</button>
										</div>
									</div>
								</form>
			  				</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div
      		</div>
      		
			
				






      		
			<hr>
		
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>About Us</h3>
					<p align="justify">
						We are also pleased to inform you that we, Rainbow Group of Company have been opened an office in Kathmandu, Pokhara & Chitwan, Nepal.

							We organize different tours and transport services for for all the visitors in and out of Nepal. we provide plane tickets of different national and international airlines, bus tickets all over the nepal and train tickets from nepal to india within different routes aviliable.
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Photo Stream</h3>
					<div class="flickr-widget">
							<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
						<div class="clear"></div>
					</div>
					
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-dribbble">
											<a href="http://dribbble.com"></a>
										</div>
										<div class="social-info-back social-dribbble-hover">
											<a href="http://dribbble.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-flickr">
											<a href="http://flickr.com"></a>
										</div>
										<div class="social-info-back social-flickr-hover">
											<a href="http://flickr.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
					<form id="newsletter" method="POST" action="#">
						<h3>Newsletter</h3>
						<p>Please Suscribe us</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form>
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
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
<script def src="js/custom.js"></script>
<!-- end: Java Script -->
<script src="https://chatwee-api.com/v2/script/59820322bd616d7f5960d906.js"></script>
</body>

</html>