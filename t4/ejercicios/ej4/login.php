<?php 
$usuario = isset($_GET['usuario'])? $_GET['usuario']:null;

?>

<script>
var xmlhttp;
	function accionAJAX(){
	var etiquetas = xmlhttp.responseText.split(':');
	document.getElementById("lblUsuario").innerHTML = etiquetas[0];
	document.getElementById("lblPwd").innerHTML = etiquetas[1];
	document.getElementById("enviar").value = etiquetas[2];
	
	}
	function f() {
		
			
		
		 xmlhttp = new XMLHttpRequest()			
		 var idioma = document.querySelector('input[name="bandera"]:checked').value;
		 		
		xmlhttp.open("GET","cambiarIdioma.php?idioma="+idioma,true);		
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
		
	}
</script>

<form action="autenticar.php">

<img src="img/esp.png" height="30" width="50"/>
<input type="radio" name="bandera" value="es" checked="checked" onChange="f()"/>


<img src="img/uk.png" height="30" width="50"/>
<input type="radio" name="bandera" value="en" onChange="f()"/>

<hr/>


<label id="lblUsuario" for="usuario">Usuario</label>
<input type="text" id="usuario" name="usuario" value="<?php $usuario?>" /><br/>

<label id="lblPwd" for="pwd">Contraseña</label>
<input type="password" id="pwd" name="pwd" /><br/>

<input type="submit" value="Entrar" id="enviar"/>
</form>
