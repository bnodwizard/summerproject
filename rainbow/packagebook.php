
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
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	</HEAD>

	<BODY>
		<br><br><br>
		<div class="container">
			<div class="row">
				<div class="span10">
					<?php
						if (isset($_SESSION['user'])) {
							
						
								$pbook = $_POST['packagebook'];
								$name = $_POST['name'];
								$contact = $_POST['contact'];
								$message = $_POST['message'];
								$agree = $_POST['agree'];
							
						    
						    	$userid=$_SESSION['user'];
						       $query = "INSERT INTO packagebook (id, packagebook , name, contact, message,  agree) VALUES (NULL,'" . $pbook . "','" . $name . "','" . $contact . "','" . $message . "','" . $agree . "')";
						       
								
									$results = mysql_query($query);

									if (!$results)
									{
										header('Location: index.php?e='.urlencode("Failed to Order.")); exit;
									}
									else {
										$connection = mysql_connect('localhost','root','');
										if (!$connection)
										{
											die ("Could not connect to the database: <br />". mysql_error());
										}
										mysql_select_db('book');
										$select = mysql_query("select email from register where userid = '" . $_SESSION['user'] . "'", $connection);
										$results = mysql_query($select);
										while($row = mysql_fetch_array($results))
									{
										
											$email=$row['email'];
											$messageUser = "Thank you! ".$name."Your package: " . $pbook." is being ordered. we will contact you as soon as pssible";

										require_once '../swift/vendor/autoload.php';

				// Create the Transport
				$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
				  ->setUsername('redrokmishra@gmail.com')
				  ->setPassword('odsjlqamgxanzjun')
				;

				// Create the Mailer using your created Transport
				$mailer = new Swift_Mailer($transport);

				// Create a message
				$message = (new Swift_Message('Email Verification'))
					->setSubject('Email Verification')
				  ->setFrom(['redrokmishra@gmail.com' => 'Binod'])
				  ->setTo([$email => $email])
				  ->setBody($messageUser )
				  ;
				// Send the message
				$result = $mailer->send($message);


}




										header('Location: index.php?s='.urlencode("Sucessfully Ordered.Thankyou! we will contact you soon.")); exit;
									}
									}
									else{
										header('Location: ../backend/login.php');
									}

									
								

								
						
					?>
				</div>



			</div>
		</div>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<?php
									// check for a successful form post
									if (isset($_GET['e'])) {echo "<div style='width:240px'align='center'class=\"alert alert-error\">".$_GET['e']."</div>";}
									if (isset($_GET['s'])) {echo "<div style='width:240px'align='center'class=\"alert alert-success\">".$_GET['s']."</div>";}
							?>
	</BODY>
</HTML>
