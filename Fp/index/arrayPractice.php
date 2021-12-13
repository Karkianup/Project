<?php
include 'loader.php';

$a=new Select;
$result=$a->DisplayMarksArray();
while($rows=$result->fetch_assoc()){
    $b=$rows['subject_marks'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table border=1px>
        <tr>
        <th>user code</th>
        <th>subject name</th>
        <th>subject marks</th>
        </tr>



        <tr>
            <?php
                for($i=0;$i<$rows;$i++){
                    $a=explode(',',$b)[$i];
                    ?>

   
            <td><?php echo $a   ?></td>
        </tr>
        <?php 
        
                }
                ?>



    </table>
</body>
</html>