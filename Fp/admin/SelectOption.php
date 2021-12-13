<?php
include 'loader.php';
$a=new Admin;
$result=$a->selectPractice();
?>
<select>
      <option selected disabled>Choose fullname</option>
       <?php
           while($rows=$result->fetch_assoc()){


?>
     
    <option value="<?php echo $rows['fullname'];?>"><input type="text" name="name"> </option>
    <?php

    }
?>
</select>