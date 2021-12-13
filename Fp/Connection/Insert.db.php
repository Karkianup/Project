<?php
Class Insert extends Connection{
public $userCode,$subject_code,$marks;
  
 
    //upload student marks
    function subject($userCode,$subject_code,$marks){
        $this->userCode=$userCode;
        $this->subject_code=$subject_code;
        $this->marks=$marks;

  

     }

        //from UploadMarksForm.php
   function uploadMarks(){
       $sql="INSERT INTO exams_result(user_code,subject_code,subject_marks) VALUE('$this->userCode','$this->subject_code','$this->marks')";
          if($this->connection()->query($sql)){
              echo" success";
          }else{
              echo" fail";
          }


    }
    
    
    
    
    }
    ?>