
function chama(){
	window.location.href="../index.php";
}

function chama2(id){
    window.location.href="../view/avalia.php?id="+id;
}

function validar(dom,tipo){
	switch(tipo){
		case'num':var regex=/[A-Za-z]/g;
    break;
		case'text':var regex=/\d/g;
    break;
	}
    dom.value=dom.value.replace(regex,'');
	
}

function valida(dom){
    if(dom.value > 10){
        alert("Insira uma nota entre 0 e 10");
        document.getElementById("pe").value = "";
    }
}

function validaform(){

if(document.getElementById("me").value.length == "")
	{
		alert('Campo média obrigatorio!');
		
		return false


	}
}

function media() {
	var n1 = document.getElementById('pe').value.length;
    var n2 = document.getElementById('co').value.length;
    var n3 = document.getElementById('in').value.length;
    var n4 = document.getElementById('de').value.length;
    var n5 = document.getElementById('sl').value.length;
    var n6 = document.getElementById('te').value.length;
    var me = document.getElementById('me').value.length;

if(n1 == "" || n2 == "" || n3 == "" || n4 == "" || n5 == "" || n6 == "")
{
  alert("Preencha os campos!");
   
}else{
    var n1 = parseInt(document.getElementById('pe').value, 10);
    var n2 = parseInt(document.getElementById('co').value, 10);
    var n3 = parseInt(document.getElementById('in').value, 10);
    var n4 = parseInt(document.getElementById('de').value, 10);
    var n5 = parseInt(document.getElementById('sl').value, 10);
    var n6 = parseInt(document.getElementById('de').value, 10);

  var media = (n1+n2+n3+n4+n5+n6)/6;
  var arredondado = parseFloat(media.toFixed(2));
  document.getElementById("me").value = arredondado;
  

}

}
