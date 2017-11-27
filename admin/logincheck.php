<?php session_start();
?>
<?php



$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('admin');



	
// get the posted data
$email = strip_tags( utf8_decode( $_POST['email'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
$_SESSION['name']=$email;

//Check whether the student is already registered.
$select = mysql_query("select name from register where email = '" . $email . "' and password = '" . $password . "'", $connection);

	

$num_rows = mysql_num_rows($select);




if ( $num_rows == 0){
	$error = 'You are not registered.';
}
else{
header('Location: index.php');		
	}
	
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: login.php?e='.urlencode($error)); exit;
}


?>
