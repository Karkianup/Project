<?php
error_reporting(0);
session_start();
include 'loader.php';
if($_SESSION['id']){
  if($_SESSION['usertype']=="teacher"){
     header("Location:teacherloginPage.php",true,301);
  }else{
    header("Location:Studentloginpage.php",true,301);

  }
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="a.css">

</head>
  <body>
  <header>
  <div class="nav">
  <a href="Homepage.php">Home</a>
  <a href="login.php">login</a>

</div>
   <footer>
      <h3>&copy;Copyright Preserved</h3>
    </footer>
    <h2 id="loginFormHeader"><b>Welcome to login page</b></h2>
            <div class="container">
              <div class="row">
                <div class="col-3" id="loginform">
      

      
                  <form action="Displaylogin.php" method="POST">
                     <input type="text" name="email" placeholder="Email" class="form-control" required><br>
                     <input type="password" name="password" class="form-control" placeholder="Password" required><br>
                    <input type="submit" value="submit" name="login" class="btn  btn-primary">
                  </form><br>

                </div>
              </div>
            </div>
            <div class="error">
            <?php
       $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
       if(strpos($fullUrl,"login=password")==true){
         echo"<u>wrong password!!!!!</u>";
         exit();
       }else if(strpos($fullUrl,"login=email")==true){
         echo"<u>username doesnot exit</u>";
         exit();
       } 

       
       
       ?>
            </div>
     
    
  
                     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
                     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

  </body>
</html>