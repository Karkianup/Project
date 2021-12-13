<?php
error_reporting(0);
session_start();
class Select extends Connection{
    /*for login of users */
    function login(){
        $sql="SELECT * FROM user WHERE email='".$_POST['email']."'";
        $result=$this->connection()->query($sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
               if($rows['password']==$_POST['password']){
                        return $rows;

            }else{
                header("Location:login.php?login=password");

            }
        }
    }else{
       header("Location:login.php?login=email");
    }


    }

    
    function dismarks(){
        $sql="SELECT * FROM student_marks";
        $result=$this->connection()->query($sql);
        return $result;


    }


    /* for studentlogin */
    function studentloginpage(){
    $sql="SELECT * FROM user INNER JOIN student_marks ON user.user_code=student_marks.user_code 
  WHERE user.id='".$_SESSION['id']."' ";

    $result=$this->connection()->query($sql);
    return $result;

    }

    /*for teacher profile page */
    function ProfilePage(){
        $sql="SELECT * FROM user WHERE id='".$_SESSION['id']."' ";
        $result=$this->connection()->query($sql);
        return $result;


    }




/*from ViewTotalStudentMarks.php */
function viewTotalMarks(){
    if(isset($_POST['viewmarks'])){
            $sql="SELECT * FROM user INNER JOIN student_marks 
                   ON user.user_code=student_marks.user_code  
                   WHERE examtype='".$_POST['examtype']."' AND class='".$_POST['class']."' ORDER BY fullname  ";
            $result=$this->connection()->query($sql);
           return  $result; 

        }else if(isset($_POST['search'])){
            $sql="SELECT * FROM user INNER JOIN student_marks 
            ON user.user_code=student_marks.user_code  
            WHERE user.user_code='".$_POST['searchfield']."' ";
    
                    $result=$this->connection()->query($sql);
                      return  $result; 

        }
    
    }

   /*from viewMarksByStudent.php */
     function viewMarksByStudent(){
        
        $sql="SELECT * FROM user INNER JOIN student_marks 
                  ON user.user_code=student_marks.user_code  
                  WHERE examtype='".$_POST['examtype']."' AND user.id='".$_SESSION['id']."'  ";
         $result=$this->connection()->query($sql);

         return $result;

         }
         
         /*from FeeDetail.php */
         function showFeeDetail(){
                $sql="SELECT *, SUM(fee_amount) AS TOTAL ,SUM(total_fee) AS Total_Fee FROM user JOIN student_fee
                 ON user.user_code=student_fee.user_code
                 WHERE user.id='".$_SESSION['id']."' ";
                $result=$this->connection()->query($sql);
                return $result;
            }


         /*From uploadMarksForm */
         function showSubject(){
             $sql="SELECT  * FROM user INNER JOIN subject ON user.class=subject.class WHERE user_code='".$_SESSION['user_code']."'";
             $result=$this->connection()->query($sql);
                    return $result;

                 }

         //just for practice
         function DisplayMarksArray(){
             $sql="SELECT * FROM exams_result";
             $result=$this->connection()->query($sql);
             return $result;
         }    


         }


        
    ?>