<?php
include 'loader.php';
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

$insert=new Insert($username,$email,$password,$usertype);
$insert->data($username,$email,$password,$usertype);
$insert->store();
header("Location:login.php",true,301);



?>