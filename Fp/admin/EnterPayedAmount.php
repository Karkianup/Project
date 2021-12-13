<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="nav">
       logout:
        <select name="logout" onchange="location = this.value;">>
            <option selected disabled>Admin</option>
            <option value="adminLogout.php">Logout</option>

        </select>
    </div>
    <div class="sidebar">
        <h2>Admin</h2><hr style="color:red;height:4px">
        <a href="#">Home</a><hr>
        <a href="UserProfile.php">Check Profile</a><hr>
        <a href="RegisterUser.php">Register</a><hr>
        <a href="Count.php">Total users</a><hr>
        <a href="FeeManagement.php">Fee Management</a><hr>
        <a href="Add.php">Add</a><hr>

    </div>

      <div class="payStudentFeeForm">
            <form action="EnterPayedAmountObj.php" method="POST">
                  user code:<input type="text" name="usercode"  value="<?php echo $_SESSION['userCodeAmount'] ?>" class="form-control" ><br>
                  amount:<input type="number" name="amount" placeholder="enter amount Paid by student" class="form-control"><br>
                           <input type="submit" value="Pay" class="btn btn-success">

        


    </form>



      </div>

      <div class="loginError">


      <?php
            if(!isset($_GET['payment'])){
                  exit();
                 }else{
                     $payment=$_GET['payment'];
                     if($payment=="failed"){
                         echo"total Amount for this student have not been set";
                     }else if($payment=="success"){
                         echo"sucessfully inserted";
                     }else if($payment=="fail"){
                         echo"payment fail";
                     }
                 }


                         ?>
         
      </div>

    
















     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>