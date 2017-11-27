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
	                 <h1><a href="index.html">Admin Panel</a></h1>
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



   <div class="row" >
	  				<div class="col-md-6" style="float: right; margin-top: -310px; margin-right: 200px; width: 900px;" >
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Post Package</div>
					          
					            
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" method="POST" action="post.php" enctype="multipart/form-data">
			  					<div class="form-group">
								    <label  class="col-sm-2 control-label">Picture</label>
								    <div class="col-sm-10">
								    <span class="btn btn-default" style="width: 660px;" >
								    <input type="file" name="fileToUpload" id="fileToUpload" class="custom-file-input"></span>
								  </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Name of package</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputEmail3" placeholder="Name of package" name="name" required>
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Date</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" placeholder="Date of Depature" name="date">
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Price</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" placeholder="Price of package" name="price">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Detail</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" placeholder="Textarea" rows="3" name="message"></textarea>
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary lg">Post</button>
								    </div>
								  </div>
												  <?php
									// check for a successful form post
									if (isset($_GET['e'])) {echo "<div style='width:240px'align='center'class=\"alert alert-error\">".$_GET['e']."</div>";}
									if (isset($_GET['s'])) {echo "<div style='width:240px'align='center'class=\"alert alert-success\">".$_GET['s']."</div>";}
							?>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  				
	  			</div>


<div class="content-box-large" style="margin-left: 220px;">
  				<div class="panel-heading">
					<div class="panel-title">Detail Information</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						
  					
    <?php
					    $connection = mysql_connect('localhost','root','');
					if (!$connection)
					{
						die ("Could not connect to the database: <br />". mysql_error());
					}
					mysql_select_db('admin');
					
						$query = "select * from package";
						$result = mysql_query($query);
						
						echo "<form action='cancel.php' method='POST' onsubmit='return validateCheckBox();'>";
								echo "<table class='table table-hover table-striped' id='example' align='center'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>Select</th>";
											echo "<th>Picture</th>";
											echo "<th>Name</th>";
											echo "<th>Date</th>";
											echo "<th>Price</th>";
											echo "<th>Message</th>";
											
											
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
								
									while($row = mysql_fetch_array($result))
									{
										echo "<tr>";
											echo "<td><input type='checkbox' name='formSeat[]' value='".$row['id']."'/>D<br><input type='radio' name='formSeat' value='".$row['id']."'/>U</td>";
											echo"<td><img src='../admin/uploads/".$row['picture']."'  alt='image' style='border-radius:5px;width:100px;height:100px;' ></td>";
											echo "<td>". $row['name'] ."</td>";
											echo "<td>". $row['date'] ."</td>";
											echo "<td>". $row['price'] ."</td>";
											echo "<td>". $row['message'] ."</td>";
											
										echo "</tr>";
														
								}
								echo "<tr><td></td><td><input type='text' class='form-control' placeholder='Picture' name='picture1'></td>";
								echo "<td><input type='text' class='form-control' placeholder='Name' name='name1'></td>";
								echo "<td><input type='text' class='form-control' placeholder='Date' name='date1'></td>";
								echo "<td><input type='text' class='form-control' placeholder='Price' name='price1'></td>";
								echo "<td><input type='text' class='form-control' placeholder='Message' name='message1'></td></tr>";
									echo "</tbody>";
								echo "</table>";
								echo "<button type='submit' name='formSubmit' class='btn btn-danger'>";
								echo "<i class='icon-success icon-white'></i>&nbsp Remove";
								echo"  ";
								echo "&nbsp&nbsp<button type='submit' name='formSubmit2' class='btn btn-success'>&nbsp&nbsp";
								echo "&nbsp&nbsp&nbsp&nbsp<i class='icon-remove icon-white'>&nbsp&nbsp&nbsp&nbsp</i> Edit";
							echo "</form>";
						
					?>

</div>
  				</div>
  			</div>


   

      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	





  </body>
</html>