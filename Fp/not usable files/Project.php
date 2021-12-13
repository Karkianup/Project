<?php
include 'loader.php';
$a=new Select();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="a.css">
</head>
<body>
  <div class="nav">
    <a href="Homepage.php">Home</a>
    <a href="logout.php">Logout</a>

  </div>
  <footer>
      <h3>&copy;Copyright Preserved</h3>
    </footer>

      <div class="container">
<div class="tab">
     <table style="color:black;background-color:white" width=120px height=120px cellspacing=0px class="table table-hover table-bordered">
    <div class="heading">
    <tr>
        <th>id</th>
        <th>image</th>
        <th>Student name</th>
        <th colspan=5> Marks</th>
        <th>update</th>
        <th>Delete</th>


    </tr>
</div>

    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Nepali</th>
        <th>English</th>
        <th>Social</th>
        <th>Math</th>
        <th>Science</th>
    </tr>
    <tr>
        <?php
        $result=$a->dismarks();
        while($rows=$result->fetch_assoc()){
        ?>
     <td>   <?php echo $rows['id'] ?></td>
        <?php
             $a=$rows['image'];
         echo "<td><img style='width:90px'src='images/$a'>" ?></td>
        <td><?php echo $rows['Student'] ?></td>
        <td><?php echo $rows['nepali'] ?></td>
        <td><?php echo $rows['english'] ?></td>
        <td><?php echo $rows['social'] ?></td>
        <td><?php echo $rows['math'] ?></td>
        <td><?php echo $rows['science'] ?></td>
        <td><a href='Updates.php?id=<?php echo $rows['id'] ?>&student=<?php echo $rows['Student']?>&nepali=<?php echo $rows['nepali'] ?>&english=<?php echo $rows['english'] ?>&social=<?php echo $rows['social'] ?>&math=<?php echo $rows['math'] ?>&science=<?php echo $rows['science'] ?>'class="btn btn-primary">Update</a></td>
        <td><a href='Delete.php?id=<?php echo $rows['id'] ?>'class="btn btn-danger">Delete</a>

        </tr>

        <?php
             }
             ?>


 
    



            </table>
    </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
                     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>


</body>
</html>