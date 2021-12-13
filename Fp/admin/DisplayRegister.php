<?php
include 'loader.php';
$usercode=$_POST['user_code'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['cpassword'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$usertype=$_POST['usertype'];

$fileName=$_FILES['images']['name'];
$fileType=$_FILES['images']['type'];
$fileTmp=$_FILES['images']['tmp_name'];
$fileError=$_FILES['images']['error'];
$fileSize=$_FILES['images']['size'];

$destination="images/".$fileName;
$destination1="c:/xampp/htdocs/Fp/index/images/".$fileName;
if(move_uploaded_file($fileTmp,$destination)){
      copy($destination,$destination1);
    


}
$a=new Admin;
$a->data($usercode,$fullname,$email,$password,$gender,$class,$fileName,$usertype);
$a->storeUserValue();


?>