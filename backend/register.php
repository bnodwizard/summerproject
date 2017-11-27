

<?php

session_start();
$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: book.php'); exit;
}

	
// get the posted data
$doj = strip_tags( utf8_decode( $_POST['journey_date'] ) );
$name = strip_tags( utf8_decode( $_POST['user_name'] ) );
$from = strip_tags( utf8_decode( $_POST['from2'] ) );
$to = strip_tags( utf8_decode( $_POST['to2'] ) );
$address = strip_tags( utf8_decode( $_POST['address'] ) );
$mobile = strip_tags( utf8_decode( $_POST['mobile'] ) );
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$email = strip_tags( utf8_decode( $_POST['email'] ) );
$message = strip_tags( utf8_decode( $_POST['message'] ) );

// check that name was entered
if (empty($name))
    $error = 'You must enter your name.';

// check that address was entered
if (empty($address))
    $error = 'You must enter your address.';

// check that mobile number was entered
if (empty($mobile))
    $error = 'You must enter your mobile number.';

// check that user id was entered
if (empty($userid))
    $error = 'You must enter your user id.';

// check that an email address was entered
elseif (empty($email)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
    $error = 'You must enter a valid email address.';


//Check whether the student is already registered.
$select = mysql_query("select * from register where userid = '" . $userid . "'", $connection);

//$query = mysql_real_escape_string($select);

$num_rows = mysql_num_rows($select);

if ( $num_rows )
{



/*Success
$query = "INSERT INTO register (userid, name, email, password, address, contact, message) VALUES ('" . $userid . "','" . $name . "','" . $email . "','" . $password . "','" . $address . "','" . $mobile . "','" . $message . "')";

$insert = mysql_real_escape_string($query);

$results = mysql_query($query);

if (!$results)
{
	die ("Could not insert to the register: <br />". mysql_error());
}
*/
$seatNumber = NULL;

for($i=1; $i<35; $i++)
{
	$chparam = "ch" . strval($i);
	$calcPNR = $doj . "-" . strval($i);
	if( !empty($_POST[$chparam]) )
	{
		$query = "INSERT INTO seat(userid, name, email,  address, contact, message, number, PNR, date , froma, toa) VALUES ('". $userid ."','" . $name . "','" . $email . "','" . $address . "','" . $mobile . "','" . $message . "','" . intval($i) . "','". $calcPNR ."','". $doj ."','". $from ."', '". $to ."')";

		$results = mysql_query($query);
		if (!$results)
		{
			die ("Could not update seat: <br />". mysql_error());
		}
		$seatNumber = $seatNumber .", ". "$i";
	}
}
if(!empty($message))
{
	$message = "A new user '". $name ."' has booked seat number: '". $seatNumber ."'." . "His message is as below." . $message;	
}
else
{
	$message = "A new user '". $name ."' has booked seat number: '". $seatNumber;	
}
// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email\n";
$email_content .= "Message:\n\n$message";

$messageUser = "Thank you! ".$name." 
				
				Your ticket is booked. The seat number is/are : " . $seatNumber." From ".$from." To ".$to." on the date ".$doj." please be at station half hour earlier befor depature.If you have to cancle your ticket please kindly inform us a day before";

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
					->setSubject('Ticket booking')
				  ->setFrom(['redrokmishra@gmail.com' => 'Binod'])
				  ->setTo([$email => $email])
				  ->setBody($messageUser )
				  ;
				// Send the message
				$result = $mailer->send($message);


mysql_close($connection);	
// send the user back to the form

header('Location: index.php?s='.urlencode('Your seat is booked.')); exit;
}
else{
	header('Location: index.php?e='.urlencode("Booking failed.")); exit;
}
?>
