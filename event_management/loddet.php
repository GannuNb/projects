
<?php

echo "HHHHHHHHHH";
if($_SERVER['REQUEST_METHOD']== 'POST'){
	$name = $_POST['Username'];
    $mail = $_POST['Email'];
    $pass = $_POST['Password'];
    $address = $_POST['address'];

    $sql = "SELECT * FROM register WHERE Uname = '".$name."'  AND pass = '"$pass"' AND Email = '"$mail"' AND Address = '"$address"' ";
    $res = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($res);
    
    if($num == 1){
        echo "USER ALREADY EXISTS";
    }

    else{
        $sql = "INSERT INTO register VALUES ('$name', '$pass' , '$Email' , '$Address')";
        $res = mysqli_query($conn , $res);
        header('Location:verify(edit).php');
    }
}

?>