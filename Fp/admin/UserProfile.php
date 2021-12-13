<?php
error_reporting(0);
include 'loader.php';
$a=new Admin;
$result=$a->displayUserProfile();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="a.js"></script>
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

<!-- creating a sidebar -->
<div class="sidebar">
        <h2>Admin</h2><hr style="color:red;height:4px">
        <a href="#">Home</a><hr>
        <a href="UserProfile.php">Check Profile</a><hr>
        <a href="RegisterUser.php">Register</a><hr>
        <a href="Count.php">Total users</a><hr>
        <a href="FeeManagement.php">Fee Management</a><hr>
        <a href="Add.php">Add</a><hr>

    </div>
    <!-- creating a form -->
    <form action="UserProfile.php" method="POST">


    <div class="userProfileSearch">
        <input type="text" name="searchBar" placeholder="search">
        <input type="submit" value="search" name="search"><br>
    </div>
        <div class="userProfileSelect">
            <select name="usertype" class="form-select" onchange="showDiv(this)">
                <option value="" selected disabled>Choose usertype</option>
                <option value="student">Student</option>
                <option value="teacher">teacher</option>

            </select>
        </div>
            <div id="hidden_div" style="display:none">
            <select name="class" class="form-select">
                   <option value="" selected disabled>Choose class</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                   <option value="4">Four</option>
                   <option value="5">Five</option>
                   <option value="6">Six</option>
                   <option value="7">Seven</option>
                   <option value="8">Eight</option>
                   <option value="9">Nine</option>
                   <option value="10">Ten</option>



            </select>
            </div>
            <input id="userProfileButton" type="submit" value="check" name="check" >
        
    </form>

        <div class="userProfileTable">
            <table border="1" cellspacing="2px" class="table table-hover table-bordered">
                <tr>
                     <th>User Code</th>
                     <th>Pictures</th>
                     <th>Full Name</th>
                     <th>Email id</th>
                     <th>Password</th>
                     <th>Gender</th>
                     <th>Class</th>
                    <th>Usertype</th>
                    <th>Edit</th>
                    <th>Delete</th>



                </tr>
                <tr>
                    <?php
                    while($rows=$result->fetch_assoc()){
                        $images=$rows['image'];
                    ?>
                    <td><?php echo $rows['user_code']  ?></td>
                    <td><?php echo "<img style='height:120px;width:120px;' src='images/$images'" ?></td>
                    <td><?php echo $rows['fullname'] ?></td>
                    <td><?php echo $rows['email']?></td>
                    <td><?php echo $rows['password']?></td>
                    <td><?php echo $rows['Gender']?></td>
                    <td><?php echo $rows['class']?></td>
                    <td><?php echo $rows['usertype']?></td>
                    <td><a href="EditProfile.php?id=<?php echo $rows['id'] ?>&fullname=<?php echo $rows['fullname'] ?>&email=<?php echo $rows['email'] ?>&password=<?php echo $rows['password'] ?>&gender=<?php echo $rows['Gender'] ?>&class=<?php echo $rows['class'] ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="DeleteProfile.php?id=<?php echo $rows['id']?>" class="btn btn-danger">Delete</a></td>



                </tr>
            <?php
                    }

            ?>

            </table>
            


        </div>

        <div class="loginError">
            <?php
               if(!isset($_GET['deletion'])){
                   exit();
               }else{
                   $deletion=$_GET['deletion'];
                   if($deletion=="success"){
                       echo"successfully deleted";
                   }else if($deletion=="failed"){
                       echo"failed";
                   }
               }

            ?>
        </div>
          













     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>