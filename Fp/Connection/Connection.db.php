<?php
Class Connection{
    private $host,$user,$pass,$dbname;

    protected function connection(){
        $this->host="localhost";
        $this->user="root";
        $this->pass="";
        $this->dbname="projectreg";


        $conn=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        return $conn;
    }




}



?>