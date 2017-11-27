
<!DOCTYPE HTML>

<?php
	
	session_start();
	$connection = mysql_connect('localhost','root','');
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysql_select_db('book');
?>

<HTML>

	<HEAD>
			<style>
#snackbardate {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: orange;
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

#snackbardate.show {
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
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: orange;
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
		<title>Bus Ticket Booking</title>
		
		
	</HEAD>

	<BODY>
	<header>
		
		<!--start: Container -->
		<div class="container" style="opacity: 0.8;position: fixed;z-index: 1;">
			
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
										<li><a href="../rainbow/services.php">Services</a></li>
										
			              				<li><a href="../rainbow/contact.php">Contact</a></li>
			              				<li class="dropdown">
			                				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
			                				<ul class="dropdown-menu">
			                				<?php
			                				if (isset($_SESSION['user'])) {
			                					echo"<li><a href='profile.php'>".$_SESSION['user']."</a></li>";
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
	<div style="width: 375px;margin-left: 460px;"><?php

					// check for a successful form post
					if (isset($_GET['s'])) 
					{
						echo "<div class=\"alert alert-success\">".$_GET['s']."    Please check your email for your ticket.</div>";

						//header("refresh: 5; index.php");
					}

					// check for a form error
					elseif (isset($_GET['e'])){ echo "<div class=\"alert alert-error\">".$_GET['e']." .  Please provide suitable information!!</div>";
					//header("refresh: 5; index.php");
						}
			?> 
</div>

	<br /><br /><br />
		<div class="container" >
			<div class="row well" style="position: relative; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
				<div class="span10" style=" margin-left:-150px; height: 700px;margin-top: 10px;">
				
					<form   action="seat.php" method="POST">
						<center>
							<label><b><h3>Book Your Ticket Now</h3></b></label>

							
							<div class="date" >
							<div data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker" >
							 <input type="text" value="" name="doj" size="10" class="span2" placeholder="YYYY-MM-DD" required>
							<span class="add-on"><i class="icon-calendar"></i></span>
							</div>
							</div>
							
							<div class="form-group">

							<div class="from" >

      						
      						
						      <select class="form-control" id="sel1" name="from" onchange="Validate();" required>
						      <option value=""> -----------------From----------------</option>
						        <option value="kathmandu">Kathmandu</option>
						        <option value="chitwan">Chitwan</option>
						        <option value="pokhara">Pokhara</option>
						      </select>
						     	</div>
						      </div>
						      <div id="snackbar">Please Select Different Destination!!</div>
						      <script type="text/javascript">
						      function Validate()
								{
								var e1 = document.getElementById("sel1");
								var e2 = document.getElementById("sel2");
								var strUser1 = e1.options[e1.selectedIndex].text;
								var strUser2 = e2.options[e2.selectedIndex].text;
								//if you need text to be compared then use
								if (strUser1==strUser2) {
									var x = document.getElementById("snackbar")
   									x.className = "show";
    								setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
									//alert("Please select different Destination");

									$('select').prop('selectedIndex', 0);
								}
								
								}
								
								
								</script>
						      <div class="to" >
						      <div class="form-group">
						      
						      <select class="form-control" id="sel2" name="to" onchange="Validate();" required>
						      <option value="">-------------------To------------------</option>
						        <option value="kathmandu">Kathmandu</option>
						        <option value="chitwan">Chitwan</option>
						        <option value="pokhara">Pokhara</option>
						      </select>
      							</div>
      							</div>
							
							<br><br>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Submit
							</button>
							<button type="reset" class="btn">
								<i class="icon-refresh icon-black"></i> Clear
							</button>
							
							<a href="cancel.php" type="button" class="btn btn-danger"  ><i class="icon-remove icon-white"></i>Cancel Ticket</a>
						</center>
						
					</form>
</div>
<div >
		
		<!-- start: Container -->
		<div class="container" style="width: 450px;float: left;margin-top: -450px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 20px;">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span">
					
					<h3 align="center">About Our Bus</h3>
					<p align="justify">
						Our luxury tourist bus is accommodated with 34 comfortable seats arranged in river side and hill side which operates daily as Kathmandu - Chitwan (Sauraha) – Kathmandu and Kathmandu – Pokhara - Kathmandu we leave at 7 am and 7:30 in the morning from kantipath, kathmandu and Pokhara respectively. We take half an hour break for lunch at Malekhu, Baikunthapuri on our trip. The last station in kathmandu is shorakhutte outskirts of thamel and tourist bus park in Pokhara

With a purpose of the nature conservation we donate Rs. 1 from every ticket sold and put into Nature Conservation Trust for the proper safety majors are acquired for the safe and good time of travel for all the passengers.</p><p align="justify">

Some of them are

Experienced bus operators and helpers Relaxing and comfortable seats with fan for summer days Insurance of all the passengers
Safety

Introducing new standards in road safety 
Greenline is pioneering new standards in road safety by introducing regular refresher courses for our drivers. We have joined hands with a number of driving institutes who conduct a specially prepared curriculum, which encompasses the difficulties faced by drivers driving in the Highways of Nepal. These courses have helped give a new perspective on the importance of safe driving, besides this they will also be able to get counseling classes where they will be able to discuss with driving instructors the problems they have been facing.
Beside regular courses for the drivers we have our own vehicle maintenance department who conduct daily checking's of all the buses. The buses are also taken for servicing after running for a certain number of kilometers.
					</p>
						
				</div>
				<!-- end: About -->

				

				
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->
<div style=" padding: 10px;  width: 45%; float: right;height: 200px; margin-top: -780px;"><p><h3>Routes and Rates</h3></p><table border="0" cellspacing="1" cellpadding="0" width="100%" class="table table-striped table-bordered">
  <tr>
    <td width="82" ><p align="center"><strong>From</strong> </p></td>
    <td width="70" ><p align="center"><strong>To</strong> </p></td>
    <td width="59" ><p align="center"><strong>Services</strong> </p></td>
    <td width="71" ><p align="center"><strong>Dep. Time </strong> </p></td>
    <td width="66" ><p align="center"><strong>Arr. Time </strong> </p></td>
    <td width="91" ><p align="center"><strong>Fare US$</strong> </p></td>
  </tr>
  <tr>
    <td width="82" rowspan="2" valign="top" ><p align="center">KATHMANDU</p></td>
    <td width="70" valign="top" ><p align="center">Pokhara</p></td>
    <td width="59" ><p align="center">DAILY</p></td>
    <td width="71" valign="top"><p align="center">07:00AM </p></td>
    <td width="66" valign="top" ><p align="center">02:30 PM </p></td>
    <td width="91" valign="top" ><p align="center">7.00</p></td>
  </tr>
  <tr>
    <td width="70" valign="top" ><p align="center">Chitwan</p></td>
    <td width="59" ><p align="center">DAILY</p></td>
    <td width="71" valign="top" ><p align="center">07:00 AM </p></td>
    <td width="66" valign="top" ><p align="center">12:30 PM </p></td>
    <td width="91" valign="top" ><p align="center">6.00</p></td>
  </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td width="100%"><table border="0" cellspacing="1" cellpadding="0" width="100%" class="table table-striped table-bordered">
      <tr>
        <td><p align="center"><strong>From</strong> </p></td>
        <td><p align="center"><strong>To</strong> </p></td>
        <td><p align="center"><strong>Services</strong> </p></td>
        <td><p align="center"><strong>Dep. Time </strong> </p></td>
        <td><p align="center"><strong>Arr. Time </strong> </p></td>
        <td><p align="center"><strong>Fare US$</strong> </p></td>
      </tr>
      <tr>
        <td width="109" rowspan="2" valign="top" ><p align="center">POKHARA</p></td>
        <td width="105" valign="top" ><p>Kathmandu </p></td>
        <td width="81"><p align="center">DAILY</p></td>
        <td width="101" valign="top" ><p align="center">7:30 AM </p></td>
        <td width="98" valign="top"><p align="center">02:00 PM </p></td>
        <td width="123" valign="top" ><p align="center">7.00</p></td>
      </tr>
      <tr>
        <td width="105" valign="top" ><p>Chitwan</p></td>
        <td width="81"><p align="center">DAILY</p></td>
        <td width="101" valign="top"><p align="center">7:30 AM </p></td>
        <td width="98" valign="top" ><p align="center">12:30 PM </p></td>
        <td width="123" valign="top" ><p align="center">7.00</p></td>
      </tr>
    </table>
        <table border="0" cellspacing="1" cellpadding="0" width="100%" class="table table-striped table-bordered">
          <tr>
            <td><p align="center"><strong>From</strong> </p></td>
            <td><p align="center"><strong>To</strong> </p></td>
            <td><p align="center"><strong>Services</strong> </p></td>
            <td><p align="center"><strong>Dep. Time </strong> </p></td>
            <td><p align="center"><strong>Arr. Time </strong> </p></td>
            <td><p align="center"><strong>Fare US$</strong> </p></td>
          </tr>
          <tr>
            <td width="120" rowspan="2" valign="top"><p align="center">CHITWAN<br>
              </p></td>
            <td width="103" valign="top" ><p align="center">Kathmandu </p></td>
            <td width="81" valign="top" ><p align="center">Daily</p></td>
            <td width="98" valign="top" ><p align="center">09:30 AM </p></td>
            <td width="96" valign="top" ><p align="center">03:00 PM </p></td>
            <td width="120" valign="top"><p align="center">6.00</p></td>
          </tr>
          <tr>
            <td width="103" valign="top" ><p align="center">Pokhara</p></td>
            <td width="81" valign="top" ><p align="center">Daily</p></td>
            <td width="98" valign="top" ><p align="center">09:30 AM </p></td>
            <td width="96" valign="top" ><p align="center">03:00 PM </p></td>
            <td width="120" valign="top"><p align="center">7.00</p></td>
          </tr>
        </table>
        <p><br>
      </p></td>
  </tr>
</table>

	</p>

</div>
</div>
</div>
    


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
	<div id="snackbardate">You Can not Select Past or Present Date!!</div>
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



     
	<script src="jquery-3.2.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<script>
			$('.myDatepicker').each(function() {
			    var minDate = new Date();
			    minDate.setHours(0);
			    minDate.setMinutes(0);
			    minDate.setSeconds(0,0);
			    
			    var $picker = $(this);
			    $picker.datepicker();
			    
			    var pickerObject = $picker.data('datepicker');
			    
			    $picker.on('changeDate', function(ev){
			        if (ev.date.valueOf() <= minDate.valueOf()){
			            var x = document.getElementById("snackbardate")
   									x.className = "show";
    								setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			            // Handle previous date
			            //alert('You can not select past date.');
			            pickerObject.setValue(minDate);
			            
			            // And this for later versions (in case)
			            ev.preventDefault();
			            return false;
			        }
			    });
			});					
		</script>

	</BODY>
</HTML>