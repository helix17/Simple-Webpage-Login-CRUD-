function emailvld()  {  
    var email=document.RegisterForm.email.value;  
    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
        return false;  
    }  
}  

function chkpass(){  
    var password1=document.RegisterForm.password.value;  
    var password2=document.RegisterForm.password2.value;    
    if(password1==password2){  
        return true;  
    }  
    else{ 
        return false;  
    }  
}  

function formvalidation()   {  
    var password=document.RegisterForm.password.value;  
    if (emailvld()==false){  
        alert("Enter a valid email.");  
        return false;  
    }
    else if(password.length<8){  
        alert("Minimum length of password is 8.");  
        return false;  
    }
    else if(chkpass()==false){
        alert("Enter the same password.")
    }  
}
