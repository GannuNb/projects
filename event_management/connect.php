<?php
// ini_set('display_errors',1);
echo"hi";
$connection=mysqli_connect("localhost","root","","EVENT_BOOKING");
if($connection)
{
	echo "connection established";
}
else
{
	echo "error".mysqli_error($connection);
}

$name=$_POST['name'];
//echo "$name";
$number=$_POST['number'];
//echo "$number";
$email=$_POST['email'];
//echo "$email";
$paswd=$_POST['paswd'];
//echo "$paswd"
$event=$_POST['event'];
//echo "$date";
$date=$_POST['date'];
//echo "$date";
$address=$_POST['address'];
//echo "$address"."<br>";
$time=$_POST['time'];


/*
$query="CREATE TABLE Booked_event(Fullname VARCHAR(15),PhoneNumber CHAR(10) UNIQUE,Email VARCHAR(50),PASSWORD VARCHAR(40),EVENT VARCHAR(50),Event_Date Date,Address VARCHAR(15), Day VARCHAR
(30));";
if(mysqli_query($connection,$query))
{
	echo "table created";
}
else
{
	echo "error:".mysqli_error($connection);
}
*/

$query="INSERT INTO Booked_event VALUES('$name','$number','$email','$paswd','$event','$date','$address','$time');";
if(mysqli_query($connection,$query))
{
	echo "record inserted";
}
else
{
	echo "error:".mysqli_error($connection);
}

echo " enter name is ".$name."<br/>";
echo " enter number is ".$number."<br/>";
echo " enter mail is ".$email."<br/>";
echo " enter password is ".$paswd."<br/>";
echo " enter event  is ".$event."<br/>";
echo " enter date is ".$date."<br/>";
echo " enter address is ".$address."<br/>";
echo " enter time is ".$time."<br/>";

?>

<!DOCTYPE html>
<html>
<body>
<button><a href="hm.html" style="text-decoration:none">Go back</a></button>
</body>
</html>
  	

