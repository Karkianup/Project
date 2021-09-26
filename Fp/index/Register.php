<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
        <h1 style="color:steelblue"><u>Create Your Account Here!!!</u></h1>
         <form action="Displayreg.php" method="POST">
             username:<input type="text" name="username"><br>
            email_id:<input type="text" name="email"><br>
             password:<input type="password" name="password"><br>
             Type:    <select name="usertype">
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>

                          </select><br><br>
         <input type="submit" value="submit" name="register">


    </form>
    </center>



</body>
</html>