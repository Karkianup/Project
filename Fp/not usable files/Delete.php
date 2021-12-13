<?php

include 'loader.php';
$conn=mysqli_connect('localhost','root','','projectreg');



$id=$_GET['id'];

$sql="DELETE FROM student_marks WHERE id='$id' ";
if(mysqli_query($conn,$sql)){
    echo"success";

   }else{
       echo"fail";
       }
?>