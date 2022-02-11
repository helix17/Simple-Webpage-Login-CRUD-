 

function formvalidation()   {  
    var password=document.LoginForm.password.value;  
    
    else if(password.length<8){  
        alert("Minimum length of password is 8.");  
        return false;  
    }  
}
