<?php
include 'loader.php';
$conn=mysqli_connect('localhost','root','','projectreg');
$sql="SELECT * FROM subject";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
    <table border=1px width=60px height=20px cellspacing=0px>
    <tr>
        <th>id</th>
        <th>Student name</th>
        <th colspan=5> Marks</th>


    </tr>

    <tr>
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
        while($rows=$result->fetch_assoc()){
        ?>
              <td><?php echo $rows['id'] ?></td>
              <td><?php echo $rows['Student'] ?></td>
              <td><?php echo $rows['nepali'] ?></td>
              <td><?php echo $rows['english'] ?></td>
              <td><?php echo $rows['social'] ?></td>
              <td><?php echo $rows['math'] ?></td>
              <td><?php echo $rows['science'] ?></td>
        </tr>

        <?php
             }
             ?>


 
       <a href="logout.php"><h2 style="color:red">Logout</h2></a>    









       </center>
</body>
</html>