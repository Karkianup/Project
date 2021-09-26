
<?php
Class Insert extends Connection{
    public $username,$email,$password,$type;
    public $student,$nepali,$english,$social,$math,$science;
    function data($username,$email,$password,$type){
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->type=$type;

    }

    function store(){
        $sql="INSERT INTO register(username,email,password,usertype) VALUES('$this->username','$this->email','$this->password','$this->type')";
        if($this->connection()->query($sql)){
            echo"successfully inserted";
        }else{
            echo"failed";
        }
    
    }
    
    function subject($student,$nepali,$english,$social,$math,$science){
        $this->student=$student;
        $this->nepali=$nepali;
        $this->english=$english;
        $this->social=$social;
        $this->math=$math;
        $this->science=$science;
     }

     function subjectinsert(){
         $sql="INSERT INTO subject(Student,nepali,english,social,math,science) VALUES('$this->student','$this->nepali','$this->english','$this->social','$this->math','$this->science')";
         if($this->connection()->query($sql)){
            echo"successfully inserted";
        }else{
            echo"failed";
        }
    
    
    
        }
        
    
}
    ?>