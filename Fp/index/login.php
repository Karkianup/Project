<?php
error_reporting(0);
session_start();
include 'loader.php';
if($_SESSION['id']){
  if($_SESSION['usertype']=="teacher"){
     header("Location:Subject.php",true,301);
  }else{
    header("Location:Student.php",true,301);

  }
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
 </head>
  <body>
    <center>
          <h1 style="color:steelblue"><u>Please Login</u></h1>
          
          <form action="Displaylogin.php" method="POST">
               
                 email_id:<input type="text" name="email"><br>
                 password:<input type="password" name="password"><br>
                      Type:    <select name="usertype">
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>

                          </select><br>
                          <input type="submit" value="login" name="login"> 

               </form>
               <a href="Register.php"><u>create your account here!!!</u></a>


    </center>
  </body>
</html>