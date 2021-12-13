<?php
session_start();
?>

<!-- Search File to Check the Studentcode After LOgin done By Teacher -->
<!DOCTYPE html>
<html lang="en">
<head>
</head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="a.css">
</head>
  <body>
    <div class="nav">
           <a href="Homepage.php">Home</a>
           <a href="logout.php">logout</a>

    </div>
    <div class="sidebar">
               <input id="sidebarname" type="text"  value="<?php  echo $_SESSION['fullname'] ?>" readonly>
                <a href="teacherProfilePage.php">Profile</a><hr>
                <a href="countStudentNumber.php">Dashboard</a><hr>
                <a href="CheckStudentCode.php">Upload marks</a><br>
                <a href="ViewTotalStudentMarks.php">View marks</a><br>


    </div>
 
    <footer>
            <h3>&copy;Copyright Preserved</h3>
    </footer>
    <div class="row">
               <div class="col-5" id="checkmarksheader">
                <h4>Check whether the student is registered or not</h4>
        
    

            </div>
        </div>
    
      <div class="container" id="checkstudentcode">
         <div class="row">
           <div class="col-3"></div>
        <div class="col-4">
               <form action="CheckMarks.php" method="POST" >
               
                    <input type="text" name="user_code" placeholder="enter student code here"  class="form-control" required><br>
                     <input type="submit" value="checkcode"  name="checkcode" class="btn btn-success">

               </form> 
  

          </div>
        </div>
      </div>

       <div class="errorDisplay">
         <?php
            if(!isset($_GET['search'])){
              exit();
            }else{
              $search=$_GET['search'];
              if($search=="notExist"){
                echo"student not registered";
              }
            }


         ?>
       </div>







  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>