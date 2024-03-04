<?php
$connection=mysqli_connect("localhost","root","","EVENT_BOOKING");
$query="select * from Booked_event";
$result=mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html>
<head>
<style>
table,th, td {
    padding: 7px;
    text-align: center;
    font-size: 16px;
    border: 1px solid black;
    border-collapse: collapse;
    }
table#t01 tr:nth-child(even) {
    background-color:#fff;
}
table#t01 tr:nth-child(odd) {
   background-color:#ffccff;
}
table#t01 th  {
    background-color:#ff1aff;
    color: white;
}
</style>
</head>	
<body>
<br>
<h2><font color="navy" size="20px">Event Booking Details</h2></font>
<table id="t01">
	 
	<tr>
		<th>Fullname</th>
		<th>PhoneNumber</th>
		<th>Email</th>
		<th>EVENT</th>
		<th>Event_Date</th>
		<th>Address</th>
		<th>Time</th>
		
	</tr>	
	<?php
		while($row=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $row['Fullname'];?></td>
				<td><?php echo $row['PhoneNumber'];?></td>
				<td><?php echo $row['Email'];?></td>
				<td><?php echo $row['EVENT'];?></td>
				<td><?php echo $row['Event_Date'];?></td>
				<td><?php echo $row['Address'];?></td>
				<td><?php echo $row['time'];?></td>
			</tr>
		<?php
		}
		?>


</table>
<br><br>
 
<?php
$query="SELECT COUNT(DISTINCT PhoneNumber) FROM Booked_event";
$count=mysqli_query($connection,$query);
	if(mysqli_num_rows($count)>0)
	{
		while($row=mysqli_fetch_array($count))
		{
			echo "Number of appointments:".$row['COUNT(DISTINCT PhoneNumber)'];
		}
	}
else
{
	echo "No result Found";
}
?>
<br>
<br>
<form>
    <button type="submit" id="j6" style="width:300px;height: 50px;background-color:#00bfff; font-size: 20px; margin: 20px"><a href="hm.html" style="text-decoration:none">Back to home</a></button>
  </form>

</body>
</html>
