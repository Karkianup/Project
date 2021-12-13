<?php
include 'loader.php';
if(isset($_POST['addSubject'])){
$subject_code=$_POST['subjectCode'];
$subject_name=$_POST['subjectName'];
$subject_class=$_POST['subjectClass'];


$a=new Admin;
$a->addSubjectData($subject_code,$subject_name,$subject_class);
$a->addSubject();


}

?>