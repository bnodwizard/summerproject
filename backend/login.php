



<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	
		
		
  	
		<style type="text/css">
	      body {
	        padding-top: 40px;
	        padding-bottom: 40px;
	        background-color: #f5f5f5;
	      }

	      .form-signin {
	        max-width: 300px;
	        padding: 19px 29px 29px;
	        margin: 0 auto 20px;
	        background-color: #fff;
	        border: 1px solid #e5e5e5;
	        -webkit-border-radius: 5px;
	           -moz-border-radius: 5px;
	                border-radius: 5px;
	        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	                box-shadow: 0 1px 2px rgba(0,0,0,.05);
	      }
	      .form-signin .form-signin-heading,
	      .form-signin .checkbox {
	        margin-bottom: 10px;
	      }
	      .form-signin input[type="text"],
	      .form-signin input[type="password"] {
	        font-size: 16px;
	        height: auto;
	        margin-bottom: 15px;
	        padding: 7px 9px;
	      }

	    </style>

	
	
	

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
	
	<header>
		
		<!--start: Container -->
		<div class="container" style="margin-top: -40px; margin-right: 500px;" >
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="../rainbow/img/logo3.png" style="width: 190px;z-index: 1"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9" >
						
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
			                				if (isset($_SESSION['user']) ){
			                					echo"<li><a href='../rainbow/'>".$_SESSION['user']."</a></li>";
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



		<div class="container" style="margin-top: 70px;">
			 

      <form class="form-signin" action="cancel.php" method="POST">
	  	<center>
        <h2 class="form-signin-heading">Please log in.</h2>

        <input type="text" class="input-block-level" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." placeholder="User ID" required>
        <input type="password" class="input-block-level" name="password" placeholder="Password" required>
		<input type="hidden" name="save" value="signin">
		<button type="submit" class="btn btn-info">
			<i class="icon-ok icon-white"></i> Login
		</button>
		<button type="reset" class="btn btn-warning btn-md"">
			<i class="icon-refresh icon-black"></i> Clear
		</button>
		</center>
		<br>
		
		<div class="already">
			            Don't have an account yet?
			            <a href="signupnew.php">Sign Up</a>
			            <?php
					// check for a successful form post
					if (isset($_GET['e'])) echo "<div style='width:240px'align='center'class=\"alert alert-error\">".$_GET['e']."</div>";
					if (isset($_GET['s'])) echo "<div style='width:240px'align='center'class=\"alert alert-success\">".$_GET['s']."</div>";
			?>
			        </div>
      </form>
      

    </div>


	
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container" style="margin-top: 51px;">
			
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