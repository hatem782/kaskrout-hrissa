




function sub(){
 var verif = 0;

var ch = document.getElementById("mail").value;
var i;

for(i=0;i<ch.length;i++){
  if(ch[i]=='.') verif=1;
}


if(verif==0){
  alert("email incorrect");
  return false;
}

var cin = document.getElementById("idd").value;
if(isNaN(cin)){
  alert("CIN incorrect");
  return false ;
}

return true;

}
