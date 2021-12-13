<?php

include 'loader.php';
$conn=mysqli_connect('localhost','root','','projectreg');



$id=$_GET['id'];
$nepali=$_GET['nepali'];
$english=$_GET['english'];
$social=$_GET['social'];
$math=$_GET['math'];
$science=$_GET['science'];



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
 
       <footer>
                 <h3>&copy;Copyright Preserved</h3>
       </footer>

       <div class="container">
           <h3 id="editStudentMarksheader">Edit student marks </h3>
           <div class="row">
               <div class="col-2" id="editMarksForm">
               <form>
                       id:<input type="text" name="id" value="<?php echo $id?>" class="form-control">
                       nepali:<input type="number" name="nepali" value="<?php echo $nepali?>" class="form-control" >
                       english:<input type="number" name="english" value="<?php echo $english?>"class="form-control">
                       social:<input type="number" name="social" value="<?php echo $social?>"class="form-control">
                       math:<input type="number" name="math" value="<?php echo $math?>"class="form-control">
                       science:<input type="number" name="science" value="<?php echo $science?>"class="form-control">
                                 <input type="submit" name="submit" value="update" class="btn btn-success">
    


              </form>

               </div>
           </div>
       </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   </body>
   </html>


<?php
if(isset($_GET['submit'])){
    $id=$_GET['id'];
$nepali=$_GET['nepali'];
$english=$_GET['english'];
$social=$_GET['social'];
$math=$_GET['math'];
$science=$_GET['science'];



    $sql="UPDATE student_marks SET nepali='$nepali',english='$english',math='$math',social='$social',science='$science' WHERE id='$id'";
   if(mysqli_query($conn,$sql)){
       echo"done";
   }else{
       echo"failed";
   }
}
?>