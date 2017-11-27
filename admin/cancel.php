
<?php

session_start();
$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('admin');
?>

<!DOCTYPE HTML>
<HTML>

	<HEAD>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ticket Cancelation</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	</HEAD>

	<BODY>
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="span10">
					<?php
						if(isset($_POST['formSubmit'])) 
						{
							if(isset($_POST['formSeat']))
								$aSeat = $_POST['formSeat'];
							
							if(empty($aSeat)) 
						    {
								echo("<div class='alert alert-error'>You didn't select any package.</div>\n");
							} 
						    else 
						    {
						        $N = count($aSeat);
								for($i=0; $i < $N; $i++)
								{
									$query = "delete from package where id = ' $aSeat[$i]'";
									$result = mysql_query($query);
								}

								header('Location: package.php?e='.urlencode("Your package(s) is(are) cancelled.")); exit;

								
							}   
						}
					?>
				</div>

<div class="span10">
					<?php
					
						if(isset($_POST['formSubmit2'])) 
						{
							$picture = strip_tags( utf8_decode( $_POST['picture1'] ) );
							$name = strip_tags( utf8_decode( $_POST['name1'] ) );
							$date = strip_tags( utf8_decode( $_POST['date1'] ) );
							$price = strip_tags( utf8_decode( $_POST['price1'] ) );
							$message = strip_tags( utf8_decode( $_POST['message1'] ) );
									if(isset($_POST['formSeat']))
								$aSeat = $_POST['formSeat'];
							
							if(empty($aSeat)) 
						    {
								echo("<div class='alert alert-error'>You didn't select any package.</div>\n");
							} 
						    else 
						    {
						        $N = count($aSeat);
								if($N==1)
								{	$query="update package SET `picture`='$picture',`name`='$name',`date`='$date',`price`='$price',`message`='$message' where `id` ='$aSeat'";
								
									$result = mysql_query($query);
									echo $name;
									header('Location: package.php?e='.urlencode("Your package(s) is(are) Updated.")); exit;

								}
								else{
									header('Location: package.php?e='.urlencode("Update failed")); exit;
								}


								

								
							}   
						}
					?>
				</div>

			</div>
		</div>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</BODY>
</HTML>
