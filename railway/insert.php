<?php


$connection = mysqli_connect("localhost","root","","railway");

// Check connection
if (!$connection){
	echo "Error:".mysql_connect_error();
}else {
	echo "connected!!";
	# code...
}



$fullname =$_POST['fullname'];
$emailaddress = $_POST['emailaddree'];
$phonenumber = $_POST['phonenumber'];
$nidnumber = $_POST['nid number'];
$date = $_POST['date'];
$jobtitle = $_POST['jobtitle'];
$creatpassword = $_POST['creatpassword'];
$repeatpassword = $_POST['repeatpassword'];
$sql = "INSERT INTO sign_up(fullname,emailaddree,phonenumber,nidnumber,date,jobtitle,creatpassword,repeatpassword) VALUES ('fullname','emailaddree','phonenumber','nidnumber','date','jobtitle','creatpassword','repeatpassword' ) ";

if(!mysqli_query( $connection,$sql ))
{
  echo "not Inserted";
}
else{
	echo "Inserted";
}
header("refresh:2; url = index.html");


?>