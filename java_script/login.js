var attempt = 3;
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "admin" && password == "admin#123"){
alert ("Login successfully");
document.getElementById("form").action = "http://127.0.0.1/php/show.php";
return false;
}
else{
attempt --;
alert("You have left "+attempt+" attempt;");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}