function checkNom() {
    var nom = document.getElementById("input1");
    var RegExp = /^[A-Z][a-z]{3,15}$/;
    if (!RegExp.test(nom.value)) {
        alert("Le Nom devrait commencer par une lettre majuscule");
        nom.value="";
        nom.focus();
        return false;
    }
    return true;
}
function checkPrenom() {
    var prenom = document.getElementById("input2");
    var RegExp = /^[A-Z][a-z][\s A-Z a-z]{3,15}$/;
    if (!RegExp.test(prenom.value)) {
        alert("Le Prenom devrait commencer par une lettre majuscule\r\net formé de 5 caractères");
        prenom.value="";
        prenom.focus();
        return false;
    }
    return true;
}
function checkPass() {
    var pass=document.getElementById("input3");
    var RegExp = /^[A-Z|a-z|!|$|0-9]{8,15}$/;
    if (!RegExp.test(pass.value)) {
        alert("Your password must be between 8 and 15");
        pass.focus();
        return false;
    }
    return true;
}
function checkRePass() {
    var pass=document.getElementById("input3").value;
	var repass=document.getElementById("input4").value;
    if (pass != repass) {
        alert("Wrong password");
        repass.focus();
        return false;
    }
    return true;
}
function checkForm(){
   if(!checkNom()){
        return false;
    }
    else if(!checkPrenom()){
        return false;
    }
	else if(!checkPass()){
        return false;
    } 
    else if(!checkRePass()){
         return false;
    }
    return true;
}