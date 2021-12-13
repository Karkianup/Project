<?php

include 'loader.php';
$exam_code=$_POST['addExamCode'];
$exam_name=$_POST['addExamName'];
var_dump($exam_name)."<br>";
var_dump($exam_code);

$a=new Admin;

$a->addExamData($exam_code,$exam_name);
$a->Exam();


?>

