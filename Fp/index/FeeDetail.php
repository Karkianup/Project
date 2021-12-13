<?php
session_start();
include 'loader.php';
$a=new Select;
$result=$a->showFeeDetail();
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
                
                    <div class="container FeeDetail">
                        <div class="row">
                            <div class="col-5">
                              
                                <?php

                            
                                   while($rows=$result->fetch_assoc()){
                                     echo"Total Amount to be paid: Nrs <u>".$rows['Total_Fee']."</u> rupees only<br>";
                                     echo"Total Amount paid: Nrs <u>".$rows['TOTAL']."</u> rupees only<br>";
                                      
                                     $leftToPay=$rows['Total_Fee']-$rows['TOTAL'];
                                      echo"Total Amount paid: Nrs <u>".$leftToPay."</u> rupees only<br>";
                                   
                                ?>
                                



                                <?php
                                }?>




                            </div>
                        </div>
                    </div>
      

              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
    </html>