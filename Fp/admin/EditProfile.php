<?php 
include 'loader.php';
$conn=mysqli_connect('localhost','root','','projectreg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="index.css">
<style>
    #a{
        position:absolute;
    top:18vh;
    left:44%;
    color:red;
    font-family: verdana;
    font-weight: bold;
    text-decoration: underline;
    }
    </style>
</head>
<body>
    <div class="nav">
       logout:
        <select name="logout" onchange="location = this.value;">>
            <option selected disabled>Admin</option>
            <option value="adminLogout.php">Logout</option>

        </select>
    </div>
    <div class="displayDetail">
        <h2>Update</h2>
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

     <?php
     $id=$_GET['id'];
     $fullname=$_GET['fullname'];
     $email=$_GET['email'];
     $password=$_GET['password'];
     $class=$_GET['class'];


     
     ?>

     <div class="container editProfile" >
         <div class="row">
             <div class="col-4">
                 <form>
                     id:<input type="number" name="id" value="<?php echo $id ?>" class="form-control" readonly >
                     fullname:<input type="text" name="fullname" value="<?php echo $fullname ?>" class="form-control">
                     email:<input type="text" name="email" value="<?php echo $email ?>" class="form-control">
                     password:<input type="text" name="password" value="<?php echo $password ?>" class="form-control">
                     class:<input type="text" name="class" value="<?php echo $class ?>" class="form-control"><br>
                     
                     <input type="submit" value="update" name="updateProfile" class="btn btn-primary">

                 </form>
             </div>
         </div>
     </div>


    <?php
            if(isset($_GET['updateProfile'])){
                $id=$_GET['id'];
                $fullname=$_GET['fullname'];
                $email=$_GET['email'];
                $password=$_GET['password'];
                $gender=$_GET['gender'];
                $class=$_GET['class'];
        
        $sql="UPDATE user SET fullname='$fullname',email='$email',password='$password',gender='$gender',class='$class' WHERE id='$id'";
        if(mysqli_query($conn,$sql)){
             echo "<span id='a'>"."success"."</span>";
        }else{
            echo "<span id='a'>"."fail"."</span>";
            
        }
    
            
            }

         
     ?>













     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>