<?php session_start();
?>
<?php
if (isset($_SESSION['user'])) {
header('Location: profile.php');
}
else{
$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');

// check for form submission - if it doesn't exist then send back to signin form

	
// get the posted data
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
$password=sha1($password);
	

// check that user id was entered
if (empty($userid))
    $error = 'You must enter your user id.';

	
// check that a message was entered
if (empty($password))
    $error = 'You must enter password.';



//Check whether the student is already registered.
$select = mysql_query("select * from register where userid = '" . $userid . "' and password = '" . $password . "'", $connection);

//$query = mysql_real_escape_string($select);

$num_rows = mysql_num_rows($select);

if ( $num_rows == 0)
	$error = 'You are not registered.';
	else{
		$_SESSION['user']=$userid;
		header('Location: profile.php');
	}
	
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: login.php?e='.urlencode($error)); exit;
}
}

?>
