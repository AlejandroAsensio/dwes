<script>
var xmlhttp;
	function accionAJAX(){
	var etiquetas = xmlhttp.responseText.split(':');
	document.getElementById("idPalabraLabel").innerHTML = etiquetas[0];
	document.getElementById("idTraduccionLabel").innerHTML = etiquetas[1];
	document.getElementById("idBoton").value = etiquetas[2];
	
	}
	function f() {
		
			
		
		 xmlhttp = new XMLHttpRequest()			
		 var idioma = document.querySelector('input[name="bandera"]:checked').value;
		 		
		xmlhttp.open("GET","ajax.php?idioma="+idioma,true);		
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
		
	}
</script>

<img src="img/esp.png" height="30" width="50"/>
<input type="radio" name="bandera" value="es" checked="checked" onChange="f()"/>

<img src="img/uk.png" height="30" width="50"/>
<input type="radio" name="bandera" value="en" onChange="f()"/>

<img src="img/fr.png" height="30" width="50"/>
<input type="radio" name="bandera" value="fr" onChange="f()"/>

<hr/>


<label id="idPalabraLabel" for="idPalabraTexto">Palabra</label>
<input type="text" id="idPalabraTexto"/>
<br/>

<label id="idTraduccionLabel" for="idTraduccionTexto">Traduccion</label>
<input type="text" id="idTraduccionTexto"/>
<br/>

<input id="idBoton" type="submit" value="Enviar"/>