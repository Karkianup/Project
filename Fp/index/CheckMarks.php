<!-- after knowing student has been registered through student code..
to know whether student marks have been updated or not -->

<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
include 'loader.php';
session_start();
$search=new Search;
$result=$search->checkStudentCode();
while($rows=$result->fetch_assoc()){
    $studentcode=$rows['user_code'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
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


    <div class="container" >
        <div class="row">
            <div class="col-5" id="checkmarksheader">
                <h4>Now,Check whether marks of the student have been uploaded or not</h4>
        
    

            </div>
        </div>
         <div class="row" >
            
            <div class="col-4" id="checkmarks">
                
                    <form action="DisplayMarks.php" method="POST">
                         <input type="text" name="user_code" value="<?php  echo $studentcode ?>" class="form-control"><br>
                         <input type="submit" value="submit" name="checkmarks" class="btn btn-success">
                            </form>
               
  

          </div>
        </div>
      </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
</body>
</html>