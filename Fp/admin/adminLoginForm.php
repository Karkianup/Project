<?php
include 'loader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="container" id="adminFormContainer">
        <div class="row">
            <div class="col-3" id="adminForm">
               <h3>Admin login</h3><br>

            <form action="DisplayLogin.php" method="POST">
                <?php
                if(isset($_GET['email'])){
                    $email=$_GET['email'];

                  echo' <input type="text" name="adminEmail" placeholder="enter email" value="'.$email.' " class="form-control" required><br>';

            
                }else{
                  echo' <input type="text" name="adminEmail" placeholder="enter email" class="form-control" required><br>';

                }


                      ?>
                   <input type="password" name="adminPassword" placeholder="enter password" class="form-control" required><br>
                 <input id="button" type="submit" value="login" name="adminLogin"><br><br>


    </form>
  


            </div>
        </div>
    </div>
          
        <div class="loginError">
              <?php
              if(!isset($_GET['login'])){
                  exit();
              }else{
                  $login=$_GET['login'];
                  if($login=="password"){
                      echo"wrong password";
                  }else if($login=="email"){
                      echo"email id doesn't exist";
                  }
              }
             ?>
        </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>