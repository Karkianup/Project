<?php
include 'loader.php';
$a=new Search();

?>
<!DOCTYPE html>
<html lang="en">
<head>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <link rel="stylesheet" href="Search.css">

</head>
<body>
<div class="nav">
  <a href="Homepage.php">Home</a>
  <a href="login.php">login</a>

</div>
 
    <footer>
      <h3>&copy;Copyright Preserved</h3>
    </footer>
    <div class="container" id="cont">
        <div class="row">
            <div class="col-3" id="hya">
                <?php
                $result=$a->sea();
               while($rows=mysqli_fetch_assoc($result)){
                   $img=$rows['image'];
                   echo "<img src='images/$img' style='width:100%;height:100%;' class='img-thumbnail'>"
                ?>
             
            </div>
        </div>
        <div class="row">
            <div class="col-10" id="head">
            <h3>student detail</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3" id="detail">
               <?php echo "NAME:  ". $rows['Student'] ?>
            </div>
            <div class="col-7" id="tab">
                <table class="table table-striped"> 
                <tr>
                    <th>Nepali</th>
                    <th>English</th>
                    <th>Social</th>
                    <th>Math</th>
                    <th>Science</th>

                </tr>

                <tr>
                    <td><?php echo $rows['nepali'] ?></td>
                    <td><?php echo $rows['english'] ?></td>
                    <td><?php echo $rows['social'] ?></td>
                    <td><?php echo $rows['math'] ?></td>
                    <td><?php echo $rows['science'] ?></td>

                </tr>




                </table>
            </div>


        </div>

    </div>


    <?php
                } 
                ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>
</html>