<?php
include 'loader.php';
session_start();
$a=new Search();
$student=$a->countStudent();
$teacher=$a->countTeacher();
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
                   <a href="teacherProfilePage.php">Profile</a><hr>
                    <a href="countStudentNumber.php">Dashboard</a><hr>
                    <a href="CheckStudentCode.php">Upload marks</a><br>
                    <a href="ViewTotalStudentMarks.php">View marks</a><br>


               </div>


        <div class="container" id="countContainer">
               <div class="row">
                    <div class="col-3 box" id="countStudentheader">
                           <h6>Number of student registered</h6>
                    </div>
                    <div class="col-3 box" id="countTeacherheader">
                           <h6>Number of teacher registered</h6>
                    </div>
               </div>

               <div class="row">
                     <div class="col-3 box" id="countStudent"> <!--to count number of student!-->
                              <?php
                                   while($rows=$student->fetch_assoc()){
                                          echo $rows['total'];
                                         }
                                ?> 
                      </div>

                     <div class="col-3 box" id="countTeacher"><!--to count number of Teacher!-->
                               <?php
                                    while($rows=$teacher->fetch_assoc()){
                                            echo $rows['total'];
                                         }
                                ?>
                      </div>
                </div>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>