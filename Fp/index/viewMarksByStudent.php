<?php
session_start();
include 'loader.php';
$a=new Select();
$result=$a->viewMarksByStudent()


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
                            <input id="sidebarname" type="text"  value="<?php  echo $_SESSION['fullname'] ?>"readonly>
                            <a href="studentProfilePage.php">Profile</a><hr>
                            <a href="viewMarksByStudent.php">Result</var></a>
              </div>


    <div class="container" id="viewTotalStudentMarks">
    <form action="viewMarksByStudent.php" method="POST">

        <div class="row">
 
            <div class="col-2">
                     <select name="examtype" class="form-control">
                            <option value=""disabled selected>choose examtype</option>
                            <option value= "First Term">First Term</option>
                            <option value="Second Term">Second Term</option>
                    </select>
</div>
                  
                    <div class="col-3">
                    <input type="submit" value="Search" class="btn btn-success">


                    </div>

                    </div>
            
            </form>

       

        <div class="row">
            <div class="col-7 totalmarkstable">
                <table border="1px" class="table table-condensed table-hover">
                   <tr> 
                       <div >
                   
                    
                        <th id="tableheader">Nepali</th>
                        <th id="tableheader">English</th>
                        <th id="tableheader">Social</th>
                        <th id="tableheader">Math</th>
                        <th id="tableheader">Science</th>
                        </div>
                  </tr>
                  <tr>
                      <?php
                      while($rows=$result->fetch_assoc()){
                          ?>
                   
                          
                          <td><?php echo $rows['nepali'] ?></td>
                          <td><?php echo $rows['english'] ?></td>
                          <td><?php echo $rows['social'] ?></td>
                          <td><?php echo $rows['math'] ?></td>
                          <td><?php echo $rows['science'] ?></td>






                  </tr>

                  <?php
                      }
                   ?>     
                </table>
              
            </div>
        </div>
            
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>