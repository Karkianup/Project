<?php
spl_autoload_register('load');
function load($class){
    $path="C:/xampp/htdocs/Fp/Connection/";
    $extension=".db.php";
    $pathf=$path.$class.$extension;
    include_once $pathf;

}
?>