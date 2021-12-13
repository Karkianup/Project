<?php
session_start();
include 'loader.php';

$a=new Admin;
$admin=$a->adminLogin();
if($admin['id']){
    $_SESSION['id']=$admin['id'];
    header("location:adminLoginPage.php");
}
?>