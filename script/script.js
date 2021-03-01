
function verifyPasswords() 
{
    var password = document.getElementById("pwd1").value;
    var confirmation = document.getElementById("pwd2").value;
    if(password != confirmation) 
    {
        alert("Attention, les mots de passe entrés sont différents !"); 
    }
}