<?php
include 'loader.php';
$user_code=$_POST['userCode'];
$subjectCode=$_POST['subject_code'];
$subjectMarks=$_POST['subjectMarks'];


$c=implode(',',$subjectCode);
$b=implode(',',$subjectMarks);

var_dump($c);
var_dump($b);



$a=new Insert();
$a->subject($user_code,$c,$b);
$a->uploadMarks();


?>