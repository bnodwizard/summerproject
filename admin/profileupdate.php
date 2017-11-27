<?php

$connection = mysql_connect('localhost','root','');
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('admin');
					
						if(isset($_POST['formSubmit'])) 
						{
							
							$name = strip_tags( utf8_decode( $_POST['name'] ) );
							$user = strip_tags( utf8_decode( $_POST['user'] ) );
							$password = strip_tags( utf8_decode( $_POST['password'] ) );
						
									
						   
								
								$query="update register SET `name`='$name',`email`='$user',`password`='$password'";
								
									if($result = mysql_query($query)){
									
									header('Location: profiledit.php?e='.urlencode("Your information is Updated.")); exit;
								}

								}
								else{
									header('Location: package.php?e='.urlencode("Update failed")); exit;
								}


								

								
							   
						
					?>