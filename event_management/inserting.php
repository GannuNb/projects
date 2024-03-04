<?php
$connection=mysqli_connect("localhost","root","","EVENT_BOOKING");
if($connection)
echo"   ";        
else
echo"error";
$name=mysqli_real_escape_string($connection,$_POST['uname']);
$email=mysqli_real_escape_string($connection,$_POST['mail']);
echo $name;
/*$query1="create table users(NAME varchar(20),MAIL varchar(30));";
if(mysqli_query($connection,$query1))
	echo "table created";
else
	echo"error";
*/
$query2="insert into users values('$name','$email');";
if(mysqli_query($connection,$query2))
	echo "THANK YOU FOR BECOMING THE USER ";
else
	echo "VISIT AGAIN";
?>
