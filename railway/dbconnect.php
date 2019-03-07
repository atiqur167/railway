<?php

$connection = mysqli_connect("localhost","root"," ","railway");

// Check connection
if (!$connection){
	echo "Error:".mysql_connect_error();
}else {
	echo "connected!!";
	# code...
}
  


?>

