
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="reg.css">

</head>
<body>
<div class="reg">
    <div class="container"> 
        <div class="form-box"> 
	

            <form  method="POST">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <box-icon type='solid' name='user'></box-icon>
                    <input type="text" placeholder="username" name="Username" required>
                </div>
                <div class="input-box">
                    
                    <box-icon type='solid' name='envelope'></box-icon>
                    <input type="email" placeholder="Email id" pattern="[a-z A-Z 0-9 \.-_]+@gmail\.com$" name="Email" required>
                </div>
                <div class="input-box">
                    <box-icon type='solid' name='lock-alt'></box-icon>
                    <input type="password" placeholder="password" name="Password" required>
                </div>
                <div class="input-box">
                <box-icon type='solid' name='home'></box-icon>
                    <input type="text" placeholder="Address" name="address" required>
                </div><br>
            
                <div class="reg",class="button">
                    <input type="submit"  value="Register" class="btn">
                </div>
     
</div>
            </form>
</body>
</html>


<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_POST['Username'];
    $mail = $_POST['Email'];
    $pass = $_POST['Password'];
    $address = $_POST['address'];

    $sql = "SELECT * FROM register WHERE Uname = '".$name."' AND Email = '"$mail"' AND pass = '"$pass"' AND Address = '"$address"' ";
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


<html>
    <h1>HELLO</h1>
    </html>
