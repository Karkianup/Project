<?php
include 'loader.php';
$amount=$_POST['amount'];
$usercode=$_POST['usercode'];

$a=new Admin;
$a->enterPayedAmountData($amount,$usercode);
$a->enterPayedAmount();


?>