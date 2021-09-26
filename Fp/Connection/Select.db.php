<?php
error_reporting(0);
class Select extends Connection{
    function login(){
        $sql="SELECT * FROM register WHERE email='".$_POST['email']."' AND usertype='".$_POST['usertype']."'";
        $result=$this->connection()->query($sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
               if($rows['password']==$_POST['password']){
                        return $rows;

            }else{
                echo"sorry,wrong password";

            }
        }
    }else{
        echo"<h1>Wrong username</h1>/n <h1>or</h1>/n <h1>wrong usertype</h1>";
    }


    }
}
?>