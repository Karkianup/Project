<?php
session_start();
include 'loader.php';
$a=new Search;
$result=$a->checkMarks();
if(isset($_POST['checkmarks'])){
    $_SESSION['user_code']=$_POST['user_code'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="sidebar.css">
</head>
<body>
    <table border="1px" class="table table-condensed">
<tr>
    <th>Nepali</th>
    <th>English</th>
    <th>Social</th>
    <th>Math</th>
    <th>Science</th>
    <th>examtype</th>
    <th>Edit</th>

</tr>  
  <tr>
      <?php while($rows=$result->fetch_assoc()){
           $a=$rows['image'];
           echo "<span id='dImage'><img style='width:40%' src='images/$a'></span>"
          ?>
      <td><?php echo $rows['nepali'] ?></td>
      <td><?php echo $rows['english'] ?></td>
      <td><?php echo $rows['social'] ?></td>
      <td><?php echo $rows['math'] ?></td>
      <td><?php echo $rows['science'] ?></td>
      <td><?php echo $rows['examtype'] ?></td>
     <td> <a href='EditStudentMarks.php?id=<?php echo $rows['id'] ?>&nepali=<?php echo $rows['nepali'] ?>&english=<?php echo $rows['english'] ?>&social=<?php echo $rows['social'] ?>&math=<?php echo $rows['math'] ?>&science=<?php echo $rows['science'] ?>'class="btn btn-success">Edit</a></td>

  </tr>
  <?php  
  }?>
    </table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>