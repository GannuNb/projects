<html>
<head>
<body>
<title>Appointment Details</title>



<?php
ini_set('display_errors',1);
$connection=mysqli_connect("localhost","root","","Hospitaldetails");
/*if($connection)
{
	echo "connection established";
}
else
{
	echo "error".mysqli_error($connection);
}*/
$name=$_POST['name'];
//echo "$name"."<br>";
$gender=$_POST['gender'];
//echo "$gender"."<br>" ;
$age=$_POST['age'];
//echo "$age"."<br>" ;
$date=$_POST['date'];
//echo "$date"."<br>";
$condition=$_POST['condition'];
//echo "$condition"."<br>";
$card=$_POST['card'];
//echo "$card"."<br>";
$Hospitals=$_POST['Hospital'];
//echo "$Hospitals"."<br>";
$email=$_POST['email'];
//echo "$email"."<br>";
$number=$_POST['number'];
//echo "$number"."<br>";
$address=$_POST['address'];
//echo "$address"."<br>";
/*$query="CREATE TABLE Hospital(Fullname VARCHAR(15),Gender CHAR(10),Age int,Appointment_Date Date,Patient_condition VARCHAR(30),ArogyaSree_card CHAR(3),Hospitals VARCHAR(40),Email VARCHAR(50),PhoneNumber CHAR(10) UNIQUE,Address VARCHAR(15));";
if(mysqli_query($connection,$query))
{
	echo "table created";
}
else
{
	echo "error:".mysqli_error($connection);
}*/
$query="INSERT INTO Hospital VALUES('$name','$gender','$age','$date','$condition','$card','$Hospitals','$email','$number','$address');";
if(mysqli_query($connection,$query))
{
	//echo "Record Inserted Successfully";
}
else
{
	echo "error:".mysqli_error($connection);
}
$query="select * from Hospital;";
$check=mysqli_query($connection,$query);
if(mysqli_num_rows($check)){
	//while($row=mysqli_fetch_array($check))
		//echo $row['Fullname']."<br>",$row['Gender']."<br>",$row['Age']."<br>",$row['Appointment_Date']."<br>",$row['Patient_condition']."<br>",$row['ArogyaSree_card']."<br>",$row['Hospitals']."<br>",$row['Email']."<br>",$row['PhoneNumber']."<br>",$row['Address']."<br>";
	echo "Thank you "."<br>";
	echo "Have a Nice Day!";
		}
else{
	echo "table is empty";
}


mysqli_close($connection);

?>
</body>
</html>
