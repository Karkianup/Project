<?php
include 'loader.php';
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$usertype=$_POST['usertype'];

$filename=$_FILES['image']['name'];
$filetype=$_FILES['image']['type'];
$filetmp=$_FILES['image']['tmp_name'];
$fileerror=$_FILES['image']['error'];
$filesize=$_FILES['image']['size'];

$destination='images/'.$filename;
if(move_uploaded_file($filetmp,$destination)){
    echo"image inserted successfully";
}else{
    echo"image insertion failed";
}


$insert=new Insert;
$insert->data($fullname,$email,$password,$gender,$class,$filename,$usertype);
$insert->store();
//header("Location:login.php",true,301);


?>