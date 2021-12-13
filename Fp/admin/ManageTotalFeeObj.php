<?php
include 'loader.php';
$usercode=$_POST['user_code'];
$totalAmount=$_POST['totalAmount'];

$a=new Admin;
$a->ManageTotalFeeData($usercode,$totalAmount);
$a->ManageTotalFee();

?>