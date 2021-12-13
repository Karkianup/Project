<!DOCTYPE html>
<html lang="en">
<head>
<script src="FormValidation.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="nav">
       logout:
        <select name="logout" onchange="location = this.value;">>
            <option selected disabled>Admin</option>
            <option value="adminLogout.php">Logout</option>

        </select>
    </div>
    <div class="sidebar">
        <h2>Admin</h2><hr style="color:red;height:4px">
        <a href="#">Home</a><hr>
        <a href="UserProfile.php">Check Profile</a><hr>
        <a href="RegisterUser.php">Register</a><hr>
        <a href="Count.php">Total users</a><hr>
        <a href="FeeManagement.php">Fee Management</a><hr>
        <a href="Add.php">Add</a><hr>

    </div>
       
    <!-- creating a form -->
        <form name="registrationForm" action="DisplayRegister.php" method="POST" enctype="multipart/form-data" onsubmit="return formValidation()">
        <div class="container" >
            <div class="row" id="RegisterUserRow">
                <div class="col-4"><br><br>
                      <?php
                           if(isset($_GET['fullname'])){
                             $fullname=$_GET['fullname'];
                             echo'<span id="field">Fullname</span><input type="text" name="fullname" value="'.$fullname.'" placeholder="Enter Fullname" class="form-control" required> ';


                     }else{
                        echo'<span id="field">Fullname</span><input type="text" name="fullname" placeholder="Enter Fullname" class="form-control" required> ';
                         
                     }
                ?><br>
                       <?php
                       if(isset($_GET['usercode'])){
                           $usercode=$_GET['usercode'];
                              echo'<span id="field">User code:</span><input type="text" name="user_code" placeholder="Enter user code" value="'.$usercode.'" class="form-control" required><br>';
                     
                       }else{
                     echo'<span id="field">User code:</span><input type="text" name="user_code" placeholder="Enter user code" class="form-control" required><br>';
                           

                       }
                       ?>
                     <span id="field">Confirm password:</span><input type="password" name="cpassword" placeholder="Enter confirm"class="form-control" required><br>
               
                  
                     <span id="field">gender:</span><br>
                             male:<input type="radio" name="gender" value="male">
                             female:<input type="radio" name="gender" value="female"><br><br>
                            <div id="hidden_div" style="display:none">class:<input type="number" name="class" placeholder="Enter class" class="form-control"></div> 


                      

                    
                </div>
                <div class="col-7 box"><br><br>
                <?php
                if(isset($_GET['email'])){
                    $email=$_GET['email'];
                echo'<span id="field">email:</span><input type="text" name="email" placeholder="Enter email" value="'.$email.'" class="form-control" enctype="multipart/form-data" required><br>';
                    
                }else{
                echo'<span id="field">email:</span><input type="text" name="email" placeholder="Enter email" class="form-control" enctype="multipart/form-data" required><br>';
                

                }

                ?>
                
                
                <span id="field">password:</span><input type="password" name="password" placeholder="Enter password" class="form-control" required><br>
               

                <span id="field">Usertype:</span><br><select name="usertype" class="form-select" onchange="showDiv(this)">
                                         <option selected disabled>Choose usertype</option>
                                         <option value="student">Student</option>
                                         <option value="teacher">Teacher</option>
                                    </select><br>
                       
                     
                <span id="field">image:</span><input type="file" name="images" class="form-control"><br><br>


                </div><br><br>
            </div><br><br><br>
             <div class="row">
                 <div class="col-8">
                        <input id="RegisterUserButton" type="submit" value="Register">
                    </div>

             </div>
        </div>
        </form>
        
        

        </div>

       
        









      <script type="text/javascript" src="a.js"></script>
      <div class="loginError">
        <?php
          if(!isset($_GET['register'])){
              exit();
          }else{
              $resgisterCheck=$_GET['register'];

              if($resgisterCheck=="email"){
                  echo"email id already exits";
              }else if($resgisterCheck=="success"){
                  echo"registration successfully completed";
              }else if($resgisterCheck=="usercode"){
                  echo"user code already exist";
              }
          }


          ?>



        </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>