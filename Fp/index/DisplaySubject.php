<?php
include 'loader.php';
$studentcode=$_POST['scode'];
$student=$_POST['sname'];
$nepali=$_POST['nepali'];
$english=$_POST['english'];
$social=$_POST['social'];
$math=$_POST['math'];
$science=$_POST['science'];


$filename=$_FILES['image']['name'];
$filetype=$_FILES['image']['type'];
$filetmp=$_FILES['image']['tmp_name'];
$fileerror=$_FILES['image']['error'];
$filesize=$_FILES['image']['size'];

$destination='images/'.$filename;
if(move_uploaded_file($filetmp,$destination)){
    echo"successfullu inserted image/n";
}else{
    echo"failed insertio of image";
}



$insert=new Insert();
$insert->subject($studentcode,$filename,$student,$nepali,$english,$social,$math,$science);


?>