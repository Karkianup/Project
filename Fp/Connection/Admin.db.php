<?php
class Admin extends Connection{
    public $fullname,$email,$user_code,$password,$gender,$class,$image,$usertype;//For user registration
    public $usercode,$totalAmount;//from ManageTotalFee.php
    public $code,$feeAmount;//from EnterPayedAmount.php
    public $exam_code,$exam_name;//from addExam.php
    public $subject_code,$subject_name;//from AddSubject.php

    function adminLogin(){
        $sql="SELECT id,email,password FROM user WHERE email='".$_POST['adminEmail']."'AND usertype='admin'";
        $result=$this->connection()->query($sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
                if($rows['password']==$_POST['adminPassword']){
                    return $rows;
                }else{
                    header("Location:adminLoginForm.php?login=password&email=".$_POST['adminEmail']."");
                }

            }
        }else{
            header("Location:adminLoginForm.php?login=email");
        }

    }

//to store User data in user table 
//from RegisterUser.php
function data($usercode,$fullname,$email,$password,$gender,$class,$image,$usertype){
    $this->usercode=$usercode;
    $this->fullname=$fullname;
    $this->email=$email;
    $this->password=$password;
    $this->gender=$gender;
    $this->class=$class;
    $this->image=$image;
    $this->usertype=$usertype;


}
function storeUserValue(){
    $sql="SELECT email from user WHERE email='".$_POST['email']."'";
    $result=$this->connection()->query($sql);
    if($result->num_rows>0){
       header("location:RegisterUser.php?register=email&fullname=".$_POST['fullname']."&usercode=".$_POST['user_code']."&email=".$_POST['email']."");
        
    }else{
         $sql="SELECT user_code from user WHERE user_code='".$_POST['user_code']."'";
           $result=$this->connection()->query($sql);
           if($result->num_rows>0){
                header("location:RegisterUser.php?register=usercode&fullname=".$_POST['fullname']."&usercode=".$_POST['user_code']."&email=".$_POST['email']."");

         }else{
            $sql="INSERT INTO user(user_code,fullname,email,password,gender,class,image,usertype) VALUES('$this->usercode','$this->fullname','$this->email','$this->password','$this->gender','$this->class','$this->image','$this->usertype')";
            if($this->connection()->query($sql)){
              header("location:RegisterUser.php?register=success");
       }else{
           echo"failed";
       }

         }
        
     
}}
 
 
    //from UserProfile.php
 function displayUserProfile(){
     if(isset($_POST['check'])){
      
        if($_POST['usertype']=="student"){
            $sql="SELECT * FROM user WHERE usertype='".$_POST['usertype']."' AND class='".$_POST['class']."' ";
            $result=$this->connection()->query($sql);
            return $result;

        }else{
            $sql="SELECT * FROM user WHERE usertype='".$_POST['usertype']."' ";
            $result=$this->connection()->query($sql);
            return $result;
 
        }

     }else if(isset($_POST['search'])){
        $sql="SELECT * FROM user WHERE user_code='".$_POST['searchBar']."'";
        $result=$this->connection()->query($sql);
        return $result;

     }
  

}


/*From feeManagement.php */
function feeManagement(){
    $sql="SELECT *, SUM(fee_amount) AS TOTAL ,SUM(total_fee) AS total_fee FROM student_fee WHERE user_code='stmina'";
    $result=$this->connection()->query($sql);
    return $result;
}

/* From ManageTotalFee.php*/
function ManageTotalFeeData($usercode,$totalAmount){
    $this->usercode=$usercode;
    $this->totalAmount=$totalAmount;


}

 function ManageTotalFee(){
     if(isset($_POST['manageTotalFee'])){
         $sql="SELECT user_code FROM user WHERE user_code='".$_POST['user_code']."'";
         $result=$this->connection()->query($sql);
         if($result->num_rows>0){
             $sql="SELECT user_code FROM student_fee WHERE user_code='".$_POST['user_code']."' AND total_fee>0 ";
             $result=$this->connection()->query($sql);
             if($result->num_rows>0){
                 //echo"total amount already entered";
                 header("Location:ManageTotalFee.php?manageTotalFee=enteredAlready");

             }else{
                $sql="INSERT INTO student_fee(user_code,total_fee) VALUES('$this->usercode','$this->totalAmount')";
                if($this->connection()->query($sql)){
                    header("Location:ManageTotalFee.php?manageTotalFee=success");
    
             }

             }
           
            
         }else{
             //echo"student not regsitered";
             header("Location:ManageTotalFee.php?manageTotalFee=noUserCode");

         }
      
        }
   

     }

     /* from EnterFeeAmount*/

     function searchStudentDetail(){
         if(isset($_POST['enterFeeAmountButton'])){
            $sql="SELECT * FROM user where fullname LIKE '%".$_POST['studentName']."%' AND class='".$_POST['studentClass']."' ";
            $result=$this->connection()->query($sql);
            if($result->num_rows>0){
                return $result;
            }else{
                   header("Location:EnterFeeAmount.php?search=notfound");
             
            }
 

         }
       
        }
        

        /*enterPayedAmount.php*/
        function enterPayedAmountData($feeAmount,$code){
            $this->feeAmount=$feeAmount;
            $this->code=$code;

        }

        function enterPayedAmount(){
            $sql="SELECT total_fee FROM student_fee where user_code='".$_POST['usercode']."'";
            $result=$this->connection()->query($sql);
             if($result->num_rows>0){
                 $sql="INSERT INTO student_fee(fee_amount,user_code) VALUES('$this->feeAmount','$this->code')";
                 if($this->connection()->query($sql)){
                      header("Location:EnterPayedAmount.php?payment=success");

                 }else{
                      header("Location:EnterPayedAmount.php?payment=fail");

                 }

             }else{
                 header("Location:EnterPayedAmount.php?payment=failed");
             }


        }

   

   
 //From CheckFeeDetail.php
 function checkFeeDetails(){
     if(isset($_POST['checkFeeDetail'])){
        $sql="SELECT *,SUM(fee_amount) AS fee,SUM(total_fee) AS tFee FROM user LEFT JOIN student_fee
        ON user.user_code=student_fee.user_code
        WHERE user.fullname LIKE '%".$_POST['studentName']."%' AND class ='".$_POST['studentClass']."' GROUP BY user.user_code";
        $result=$this->connection()->query($sql);
         if($result->num_rows>0){
            return $result;


        }else{
            header("Location:CheckFeeDetail.php?search=notfound");
        }

     }
  
 }
 
  //just for practice gonna delete it later  
   function selectPractice(){
        $sql="SELECT * FROM user";
        $result=$this->connection()->query($sql);
        return $result;
   }

   //from AddExam.php
     function addExamData($exam_code,$exam_name){
         $this->exam_code=$exam_code;
         $this->exam_name=$exam_name;


     }

     function Exam(){
          $sql="INSERT INTO exams(exam_code,exam_name) VALUES('$this->exam_code','$this->exam_name')";
         if($this->connection()->query($sql)){
             header("Location:AddExam.php?submit=success");
         }else{
            header("Location:AddExam.php?submit=failed");

         }
     }

     /*from AddSubject.php */
     function addSubjectData($subject_code,$subject_name,$class){
           $this->subject_code=$subject_code;
           $this->subject_name=$subject_name;
           $this->class=$class;
         }
      function addSubject(){
          if(isset($_POST['addSubject'])){
        $sql="SELECT * FROM subject WHERE subject_code='".$_POST['subjectCode']."'";
        $result=$this->connection()->query($sql);
        if($result->num_rows>0){
             header("Location:AddSubject.php?submited=exist");
        }else{
          $sql="INSERT INTO  subject(subject_code,subject_name,class) VALUES('$this->subject_code','$this->subject_name','$this->class')";
          if($this->connection()->query($sql)){
              header("Location:AddSubject.php?submited=success");
          }else{
              echo"fail";
          }
      }}}

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





    
    }?>



