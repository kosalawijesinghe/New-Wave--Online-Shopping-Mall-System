function checkPassword(){
    if(document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value)
    {
        alert("Password mismatched!");
        return false;
    }
    else{
        alert("Success");
        return true;
    }
}

function enableButton(){
    if(document.getElementById("checkBox").checked){
        document.getElementById("submitBtn").disabled=false;
    }
    else{
        document.getElementById("submitBtn").disabled=true;
    }
    
}

