function formValidation(){
    let password=document.forms['registrationForm']['password'].value;
    let cpassword=document.forms['registrationForm']['cpassword'].value;

    if(password!=cpassword){
        alert("password and confirm password doesnot match");
        return false;
    }

}