<?php
include 'loader.php';
$a=new Select;
$result=$a->ProfilePage();

?>
<!DOCTYPE html>
<html lang="en">
     <head> 
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="sidebar.css">
        </head>
     <body>
         
                 <!-- navbar -->
              <div class="nav">
                 <a href="Homepage.php">Home</a>
                 <a href="logout.php">logout</a>

              </div>

              <footer>
                 <h3>&copy;Copyright Preserved</h3>
              </footer>

                <!-- sidebar -->
              <div class="sidebar">
                       <input id="sidebarname" type="text"  value="<?php  echo $_SESSION['fullname'] ?>" readonly>
                       <a href="studentProfilePage.php">Profile</a><hr>
                    <a href="viewMarksByStudent.php">Result</a><hr>
                    <a href="FeeDetail.php">Fee Detail</a>

                
                     
 
               </div>              
          <!-- profile of student -->
                <div class="container" id="studentProfile">
                  
                    <div class="row">
                        <div class="col-12" >
                            
                            <?php
                            while($rows=$result->fetch_assoc()){
                                $img=$rows['image'];
                                $destination="images/";
                                echo"<img style='width:120px;height:120px' src='$destination/$img'>";
                            ?>

                        </div>
                    </div><hr>
                    <div class="row">
                            <div class="col-2 box"><br>
                                  <span id="teacherDetail"><b> Full Name:</b> <?php echo $rows['fullname'];?></span><br><hr>
                                  <span id="teacherDetail"><b> Gender:</b> <?php echo $rows['Gender'];?></span><br><hr>
                                  <span id="teacherDetail"><b> Student Code: </b> <?php echo $rows['user_code'];?></span><br><hr>
                            </div>
                            <div class="col-5 box"><br>
                                  <span> <b> email:</b> <?php echo $rows['email'];?></span><br><hr>
                                  <span> <b>class:</b> <?php echo $rows['class'];?></span><br><hr>

                            </div>
                     </div>
                  
                
                
                
                </div>




<?php

                            }?>

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
    </html>