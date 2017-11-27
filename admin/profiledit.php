<?php
session_start();

if (!isset($_SESSION['name'])) {
header('Location: login.php');	
}

?>
<!DOCTYPE html>
<html>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

    
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Admin Panel</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
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
                    <li><a href="registration.php"><i class="glyphicon glyphicon-record"></i> Registration</a></li>
                    <li><a href="package.php"><i class="glyphicon glyphicon-tasks"></i> Post Package</a></li>
                    <li><a href="packageorder.php"><i class="glyphicon glyphicon-user"></i> Orders </a></li>
                    
                </ul>
             </div>
		  </div>
	
		  			</div>
		  		
		  			</div>

  <div class="col-md-7">
		  	<div class="row" style="margin-left:300px;margin-top:-310px;">
					
		  					<div class="content-box-header">
			  					<div class="panel-title">Edit Detail</div>
								
								<div class="panel-options">
									
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
								<form class="form-horizontal" role="form" method="POST" action="profileupdate.php" enctype="multipart/form-data">
			  					
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name" required>
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">User ID</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" placeholder="User ID" name="user">
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Password</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" placeholder="Password" name="password">
								    </div>
								  </div>
								  <div class="form-group" style=margin-left:135px;>
								  <button type='submit' name='formSubmit' class='btn btn-success'>
								<i class='icon-remove icon-white'></i> Edit
								</button>
								</div>
												  <?php
									// check for a successful form post
									if (isset($_GET['e'])) {echo "<div style='width:240px'align='center'class=\"alert alert-error\">".$_GET['e']."</div>";}
									if (isset($_GET['s'])) {echo "<div style='width:240px'align='center'class=\"alert alert-success\">".$_GET['s']."</div>";}
							?>
								</form>
								

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
				
								
							</div>
		  				</div>



		
			
		  	

		 
   


  </body>
</html>