<script>
	var xmlhttp;
	var tMiN;
	var tTuN;
	var mayor;
	var menor;
	var igual;
	
	function accionAJAX(){
	var etiquetas = xmlhttp.responseText.split(':');
	document.getElementById("lblUsuario").innerHTML = etiquetas[0];
	document.getElementById("jugar").innerHTML = etiquetas[1];
	tMiN = etiquetas[2];
	tTuN = etiquetas[3];
	mayor = etiquetas[4];
	menor = etiquetas[5];
	igual = etiquetas [6];
	
	}
	function f() {
		
			
		
		 xmlhttp = new XMLHttpRequest()			
		 var idioma = document.querySelector('input[name="bandera"]:checked').value;
		 		
		xmlhttp.open("GET","cambiarIdiomaJuego.php?idioma="+idioma,true);		
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
		}
		
		function pintarJuego(){
			var texto = "";
			var miN = Math.floor((Math.random() * 10) + 1);
			var tuN = document.getElementById("numero").value;
			texto += tMiN +miN+"<br/>";
			texto +=tTuN +tuN+"<br/>";
				if(tuN<miN){
				texto += menor+"<br/>";
				
				}
				else if(tuN>miN){
					texto+= mayor+"<br/>";				
				}
				else{
				texto += igual+"<br/>";
				}
				
			document.getElementById("juego").innerHTML = texto;
		}
		
	
</script>
<img src="img/esp.png" height="30" width="50"/>
<input type="radio" name="bandera" value="es" checked="checked" onChange="f()"/>


<img src="img/uk.png" height="30" width="50"/>
<input type="radio" name="bandera" value="en" onChange="f()"/>

<hr/>

<label id="lblNumero" for="numero">Introduce un numero</label>
<input type="number" min="1" max="10" value="5" id="numero"/>
<br/>


<input type="button" value="Jugar" id="jugar" onclick="pintarJuego()"/>
<br/>
<div id="juego"></div>

<?php

