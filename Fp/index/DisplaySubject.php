<?php
include 'loader.php';
$student=$_POST['sname'];
$nepali=$_POST['nepali'];
$english=$_POST['english'];
$social=$_POST['social'];
$math=$_POST['math'];
$science=$_POST['science'];

$insert=new Insert();
$insert->subject($student,$nepali,$english,$social,$math,$science);
$insert->subjectinsert();

?>