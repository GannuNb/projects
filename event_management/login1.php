<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <link rel="stylesheet" 
  href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    *{
      margin:0px;
      font-family:Arial, Helvetica, sans-serif;
    }
    .outer{
      height:600px;
      background-image: url("book-library-with-open-textbook.jpg");
      background-size: cover;
    }
    .navbar{
      background-color: hsl(0, 7%, 27%);
      padding-right: 10px;
    }
  
    .divform{
      position:absolute;
      top:30vh;
      left:-70px;
      width:100%;
}
.form{
      background-color:#00000080;
      padding:30px 30px 20px 30px;
      border-radius: 30px;
      /* height:10px; */

}

    .divform .input-group{
      margin-top:20px;
    }
    .divform input,.input-group-text{
      border-radius:30px;
      opacity:0.8;
    }
    .logbtn{
      background-color:burlywood;
      border-radius: 30px;
      font-size:20px;
    }
    .logbtn:hover{
      box-shadow: 10px;
      background-color:white;
      /* color:white; */
      opacity: 0.8;
    }
    h3{
        color:white;
        /* display:inline; */
        margin-top:10px;
        margin-bottom:0px;
        padding:10px 0px 0px 10px;
    }
    .button{
        margin-top:-25px
    }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    flag=0;
   $(document).ready(function(){
       $('#user').focus(function(){
           $('#userp').css('opacity','1');
       });
       $('#user').blur(function(){
           $('#userp').css('opacity','0.8');
       });
       $('#password').focus(function(){
           $('#psword').css('opacity','1');
       });
       $('#password').blur(function(){
           $('#psword').css('opacity','0.8');
       });
       
      
    $("#psword").click(function(){
        flag=flag+1;
        if(flag%2==0){

        $(this).attr('class','input-group-text fa fa-eye');
        $('#password').attr('type','text');
            }
        else{
        $(this).attr('class','input-group-text fa fa-eye-slash');
        $("#password").attr('type','password');
        }
});
});
</script>
</head>
<body>
 
  <!-- <div class="container-fluid "> -->

  
    <nav class="navbar navbar-expand-md  navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
       
           
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="container-fluid outer">

    </div>
  <div class="container divform">
    <div class="row d-flex justify-content-center">
      <div class=" col-sm-2"></div>
      <div class="col-8 col-md-4 form ">
        <h3 text-align="center" style="color:white;">LOGIN</h3>
          <form action="hm.html" method="POST">
              <div class="input-group">
                  <span class="fa fa-user-circle input-group-text" style="font-size: 40px;" id="userp"></span>
                      <input type="text" name="user" id="user" placeholder="username"   class="form-control" required>
              </div>
              <div class="input-group">
                  <span class="fa fa-eye-slash input-group-text" style="font-size: 40px;" id="psword"></span>
                      <input type="password" name="password" id="password" placeholder="password"  class="form-control" required>
              </div>
              <div class="button">
                  <button type="submit" class="btn  w-100 mt-5 logbtn" onclick = <a href='hm.html'></a>>login</button>
              </div>
                
              
            </form>
          </div>
          <div class="col-3 col-md-6"></div>
        </div>
  </div>
</body>
</html>


