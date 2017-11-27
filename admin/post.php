<?php  

session_start();

if (!isset($_SESSION['name'])) {
header('Location: login.php');	
}

$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('admin');  


$target_dir = "uploads/";

$uploadOk = 1;



  $aaa="fileToUpload";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES[$aaa]["tmp_name"]);
    if($check !== false) {
       
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //$_SESSION['image']=basename( $_FILES[$aaa]["name"]);
        $image=basename( $_FILES[$aaa]["name"]);
     
}
else{
	header('Location: package.php?e='.urlencode("Failed to upload  file.")); exit;
}


$name = strip_tags( utf8_decode( $_POST['name'] ) );
$date = strip_tags( utf8_decode( $_POST['date'] ) );
$price = strip_tags( utf8_decode( $_POST['price'] ) );
$message = strip_tags( utf8_decode( $_POST['message'] ) );



  
  $query = "INSERT INTO package (picture, name, date, price, message) VALUES ('" . $image . "','" . $name . "','" . $date . "','" . $price . "','" . $message . "')";



$results = mysql_query($query);

if (!$results)
{
	header('Location: package.php?e='.urlencode("Failed to insert.")); exit;
}
else {
	header('Location: package.php?s='.urlencode("Sucessfully Inserted.")); exit;
}
?>
