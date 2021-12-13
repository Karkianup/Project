<?php
session_start();
include 'loader.php';

$login=new Select();
$user=$login->login();

if($user['id']){
    $_SESSION['id']=$user['id'];
    $_SESSION['usertype']=$user['usertype'];
    $_SESSION['fullname']=$user['fullname'];

    header("location:login.php",true,301);


}

?>
