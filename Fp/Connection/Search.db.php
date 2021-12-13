<?php
class Search extends Connection{
    //from CheckStudentCode.php file
    function checkStudentCode(){
        $sql="SELECT user_code FROM user WHERE user_code='".$_POST['user_code']."'   AND usertype='student' ";
        $result=$this->connection()->query($sql);
        if($result->num_rows>0){
            return $result;
        }else{
            header("Location:CheckStudentCode.php?search=notExist");
       

        }


    }

    //from CheckMarks.php
    function checkMarks(){
    
        $sql="SELECT *
        FROM user JOIN exams_result ON user.user_code=exams_result.user_code 
        WHERE student_marks.user_code='".$_POST['studentcode']."'";
        $result=$this->connection()->query($sql);
        
   
        if($result->num_rows>0){
             return $result;
      
        }
        else{
                header("Location:UploadMarksForm.php",true,301);
        }


    }

    /*from countStudentNumber.php */
    //to count total number of student
    function countStudent(){
        $sql="SELECT COUNT(*) AS total FROM user WHERE usertype='student'";
        $result=$this->connection()->query($sql);
        return $result;

    }
    function countTeacher(){
        $sql="SELECT COUNT(*) AS total FROM user WHERE usertype='teacher'";
        $result=$this->connection()->query($sql);
        return $result;

    }







}

?>