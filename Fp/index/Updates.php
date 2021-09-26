<?php
$conn=mysqli_connect('localhost','root','','projectreg');
error_reporting(0);

$id=$_GET['id'];
$sname=$_GET['student'];
$nepali=$_GET['nepali'];
$english=$_GET['english'];
$math=$_GET['math'];
$social=$_GET['social'];
$science=$_GET['science'];
?>                      
    <center>
        <h1 style="color:steelblue">Update Marks</h1>
       <form>
                id  :<input type="text" name="id" value="<?php echo $id?>"><br>
                 Student Name:<input type="text" name="sname" value="<?php echo $sname ?>"><br>
                 Nepali:<input type="text" name="nepali" value="<?php echo $nepali?>"><br>
                 English:<input type="text" name="english" value="<?php echo $english?>"><br>
                 Social:<input type="text" name="social" value="<?php echo $social?>"><br>
                 Math:<input type="text" name="math" value="<?php echo $math?>"><br>
                 Science:<input type="text" name="science" value="<?php echo $science?>"><br><br>
                 <input type="submit" value="update" name="update">



        </form>
    </center>

<?php
    if(isset($_GET['update'])){
        $id=$_GET['id'];
        $sname=$_GET['sname'];
        $nepali=$_GET['nepali'];
        $english=$_GET['english'];
        $math=$_GET['math'];
        $social=$_GET['social'];
        $science=$_GET['science'];

        $sql="UPDATE subject SET Student='$sname',nepali='$nepali',english='$english',math='$math',social='$social',science='$science' WHERE id='$id' ";
        if(mysqli_query($conn,$sql)){
            echo"sucess";
            
        }else{
            echo"fail";
        }
    }
    
    
?>


