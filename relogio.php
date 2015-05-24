<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sem título</title>
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script >
function digital(){
	var data     = new Date();
	var horas    = data.getHours();
	var minutos  = data.getMinutes();
	var segundos = data.getSeconds();
	
	if(horas < 10){
		horas = "0"+horas;
		}
		if(minutos < 10){
		minutos = "0"+minutos;
		}
		if(segundos < 10){
		segundos = "0"+segundos;
		}
		document.getElementById("reg").innerHTML=horas+":"+minutos+":"+segundos;
	} 
 window.setInterval("digital()",1000)
</script>
<style type="text/css">
#relogio{ width:230px; height:60px; background-color:#0F0; border:#F00 8px groove; font-family:"Lucida Console", Monaco, monospace; font-size:36px; color:#00F;}
#relogio p{ margin:15px 0px 0px 25px;}
</style>
</head> 

<body onLoad="digital();">
<div id="relogio"><p id="reg"></p></div>
</body>
</html>