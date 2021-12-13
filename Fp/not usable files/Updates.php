<!DOCTYPE html>
<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="a.css">
</head>
<?php
$conn=mysqli_connect('localhost','root','','projectreg');
error_reporting(0);

$id=$_GET['id'];
$sname=$_GET['student'];
$nepali=$_GET['nepali'];
$english=$_GET['english'];
$math=$_GET['math'];
$social=$_GET['social'];
$science=$_GET['science'];
?> 

<div class="nav">
    <a href="Homepage.php">Home</a>
    <a href="logout.php">Logout</a>

  </div>
  <footer>
      <h3>&copy;Copyright Preserved</h3>
    </footer>
    <center>
        <div class="uptable">

        <h1 style="color:steelblue">Update Marks</h1>
        <table>
           <form>
              <tr><td>  id:<input type="text" name="id" value="<?php echo $id?>" class="form-control"></td></tr>
              <tr><td>Student Name:<input type="text" name="sname" value="<?php echo $sname ?>" class="form-control"></td></tr>
              <tr><td> Nepali:<input type="text" name="nepali" value="<?php echo $nepali?>" class="form-control"></td></tr>
              <tr><td> English:<input type="text" name="english" value="<?php echo $english?>" class="form-control"></td></tr>
              <tr><td> Social:<input type="text" name="social" value="<?php echo $social?>" class="form-control"></td></tr>
              <tr><td>  Math:<input type="text" name="math" value="<?php echo $math?>" class="form-control"></td></tr>
              <tr><td> Science:<input type="text" name="science" value="<?php echo $science?>" class="form-control"></td></tr>
              <tr><td>  <input type="submit" value="update" name="update" class="btn btn-primary"></td></tr>



           </form>
        </table>
    </center>
</div>
<?php
    if(isset($_GET['update'])){
        $id=$_GET['id'];
        $sname=$_GET['sname'];
        $nepali=$_GET['nepali'];
        $english=$_GET['english'];
        $math=$_GET['math'];
        $social=$_GET['social'];
        $science=$_GET['science'];

        $sql="UPDATE subject SET Student='$sname',nepali='$nepali',english='$english',math='$math',social='$social',science='$science' WHERE id='$id' ";
        if(mysqli_query($conn,$sql)){
            echo"sucess";
            
        }else{
            echo"fail";
        }
    }
    
    
?>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>


</body>

</html>