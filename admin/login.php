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

  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Admin Panel</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Sign In</h6>
			                <form method="POST" action="logincheck.php">
			                <input class="form-control" type="text" placeholder="E-mail address" name="email">
			                <input class="form-control" type="password" placeholder="Password" name="password">
			                
			                    <button class="btn btn-primary signup"  type="submit">Login</button>
			                
			                </form> 
			                <br>
			                <?php
					// check for a successful form post
					if (isset($_GET['e'])) echo "<div style='margin-left:30px;' class=\"alert alert-danger\">".$_GET['e']."</div>";
					if (isset($_GET['s'])) echo "<div align='center'class=\"alert alert-success\">".$_GET['s']."</div>";
			?>
              
			            </div>
			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>