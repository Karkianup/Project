<!DOCTYPE html>
<html>
  <head>
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="st.css">

  </head>
   <body>
          <div class="nav">
                <a href="Homepage.php">Home</a>
                <a href="logout.php">logout</a>

          </div>
          <h3 id="registerformheader">Register Here!!!</h3>

          <div class="container" >
            <div class="row">

              <div class="col-3" id="registerform">
                <form name="myforms" action="Displayreg.php" method="POST" enctype="multipart/form-data" onsubmit="return formValidation()";>
                        Fullname:<input type="text" name="fullname" class="form-control" required>
                        email address:<input type="email" name="email" class="form-control" required>
                        password:<input type="password" name="password" class="form-control" required>
                        confirm password:<input type="password" name="cpassword" class="form-control" required>
                        Gender:
                                 male:<input type="radio" name="gender" value="male">
                                female:<input type="radio" name="gender" class="female"><br><br>
                        class:  <input type="number" name="class" class="form-control">
                        image:<input type="file" name="image" class="form-control" required><br>
                        Usertype:<select name="usertype">
                                    <option value="" disabled selected>choose usertype</option>
                                     <option value="teacher">Teacher</option>
                                     <option value="student">Student</option>
                                    </select><br><br>
                          <input type="submit" value="Register" class="btn btn-success">      


                         
                </form>
              </div>
            </div>
          </div>

 
   
     
               <footer>
                    <h3>&copy;Copyright Preserved</h3>
               </footer>
               <script type="text/javascript" src="Formvalidation.js"></script>

               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script> 
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

             

    

</body>
</html>