<?php
include 'loader.php';
$comment=$_POST['comment'];


$a=new Insert;
$a->teacherComment($comment);
$a->insertteacherComment();
?>