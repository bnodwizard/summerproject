<?php  

$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('book');  


$name = strip_tags( utf8_decode( $_POST['name'] ) );
$address = strip_tags( utf8_decode( $_POST['address'] ) );
$mobile = strip_tags( utf8_decode( $_POST['mobile'] ) );
$userid = strip_tags( utf8_decode( $_POST['userid'] ) );
$email = strip_tags( utf8_decode( $_POST['email'] ) );
$password = strip_tags( utf8_decode( $_POST['password'] ) );
$password=sha1($password);


  
  $query = "INSERT INTO register (userid, name, email, password, address, contact) VALUES ('" . $userid . "','" . $name . "','" . $email . "','" . $password . "','" . $address . "','" . $mobile . "')";



$results = mysql_query($query);

if (!$results)
{
	header('Location: signupnew.php?e='.urlencode("Failed to register!Please signup again.")); exit;
}
else {
	header('Location: login.php?s='.urlencode("Sucessfully registered.Please login to continue.")); exit;
}
  
?>
