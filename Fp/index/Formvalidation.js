// from Register.php
function formValidation(){
    let password=document.forms["myforms"]["password"].value;
    let cpassword=document.forms["myforms"]["cpassword"].value;
    let clas=document.forms["myforms"]["class"].value;
    let usertype=document.forms["myforms"]["usertype"].value;
    if(usertype=="student"){
        if(clas==""){
            alert("please Select your class");
            return false;
        }
    }else if(usertype=="teacher"){
        if(clas!=""){
            alert("Teacher must leave class column empty");
            return false;

        }
    }
    if(clas<0){
        alert("your class cannot be in negative");
        return false;
    }


    if(password.length<5){
        alert("password must be larger than 5 words");
        return false;
    }else if(password!=cpassword){
        alert("password and confirm password doesnot match");
        return false;
    }



}
//from UploadMarksForm.php
function upmarks(){
    let nepali=document.forms["uploadmarks"]["nepali"].value;
    let english=document.forms["uploadmarks"]["english"].value;
    let social=document.forms["uploadmarks"]["social"].value;
    let math=document.forms["uploadmarks"]["math"].value;
    let science=document.forms["uploadmarks"]["science"].value;
      if(nepali.length>2||english.length>2 ||social.length>2||math.length>2||science.length>2){
          alert("marks cant be greater than two digits");
          return false;
         
      }

}