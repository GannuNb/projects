<?php
$conn=mysqli_connect("localhost","root","","EVENT_BOOKING");

echo "HHHHHHHHHH";


if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_REQUEST['user'];
    $pass = $_REQUEST['password'];
  
    $sql = "SELECT * FROM register WHERE Uname ='"$name"' AND pass = '"$pass"' ";
    $res = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($res);
  
    if($num == 1){
      header('Location:hm.html');
  
    }
    else{
      echo "WRONG USERNAME AND PASSWORD";
  
  }
  }
?>
