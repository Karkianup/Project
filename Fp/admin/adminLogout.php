<?php
session_start();
unset($_SESSION['id']);
header("Location:adminLoginForm.php",true,301);

?>