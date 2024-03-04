<?php
$connection=mysqli_connect("localhost","root","","Event_BOOKING");
if($connection)
echo"   ";        
else
echo"error";

$name=mysqli_real_escape_string($connection,$_POST['uname']);
$paswd=mysqli_real_escape_string($connection,$_POST['paswd'])
$contact=mysqli_real_escape_string($connection,$_POST['contact'])
$email=mysqli_real_escape_string($connection,$_POST['email']);
$event=mysqli_real_escape_string($connection,$_POST['choice']);
$date=mysqli_real_escape_string($connection,$_POST['date']);
$comments=mysqli_real_escape_string($connection,$_POST['description']);

echo $name;
/*
$query1="create table Events(NAME varchar(20),PASSWORD varchar(40),CONTACT varchar(10),MAIL varchar(30),EVENT varchar(50),DATE varchar(10),COMMENTS varchar(500));";
if(mysqli_query($connection,$query1))
	echo "table created";
else
	echo"error";
*/
$query2="insert into Events values('$name','$paswd','$contact','$email','$event','$date','$comments');";
if(mysqli_query($connection,$query2))
	echo "THANK YOU FOR BECOMING THE USER ";
else
	echo "VISIT AGAIN";
?>
