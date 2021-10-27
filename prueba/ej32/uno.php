<script>
var xmlhttp;
	function accionAJAX(){
	 document.getElementById("texto").innerHTML=xmlhttp.responseText;
	
	}
	function f() {
		
		 xmlhttp = new XMLHttpRequest();		
		 		
		xmlhttp.open("POST","raiz.php",true);		
		
		xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			
		xmlhttp.send("nombre="+document.getElementById("palabra").value);
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
	
		
	}
	function fC() {
		
		 xmlhttp = new XMLHttpRequest();
		 		
		xmlhttp.open("POST","combinar.php",true);		
			
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			
		xmlhttp.send("nombre="+document.getElementById("palabra").value);
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
	
		
	}
	
</script>

<h2>Introduce un sustantivo regular</h2>
<input type="text" id="palabra" name="sustantivo"/>
<div id="texto"></div>
<input type="button" onclick="f()" value="Raiz"/>
<input type="button" onclick="fC()" value="Combinar"/>
<h4>...y observa el resultado</h4>
