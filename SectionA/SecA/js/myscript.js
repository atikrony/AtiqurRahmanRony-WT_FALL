
function checkName()
{
var x=document.getElementById("name").value;
if(x.length <5){
    document.getElementById("error").innerHTML="please enter a valid name";
    return false;
}
else
{
    document.getElementById("error").innerHTML=x;
    return true;
}

}


function validateForm()
{
if(checkName()==true)
{
    return true;
}
else
{
    return false;
}

}


function getuser()
{
    var name=document.getElementById("search").value;

var myobj= new XMLHttpRequest();

myobj.onreadystatechange = function (){
if(this.readyState==4 && this.status==200)
{
  document.getElementById("print").innerHTML=  this.responseText;
}

};


myobj.open("GET", "http://localhost/seca/control/ajaxget.php?searchdata="+name,true);
myobj.send();
}