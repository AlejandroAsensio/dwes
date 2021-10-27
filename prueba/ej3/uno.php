<script>
var xmlhttp;
	function accionAJAX(){
	 document.getElementById("texto").innerHTML=xmlhttp.responseText;
	
	}
	function f() {
		
		 xmlhttp = new XMLHttpRequest();		
		 		
		xmlhttp.open("GET","raiz.php?nombre="+document.getElementById('palabra').value,true);		
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX();
			}
		}
	
		
	}
	function fC() {
		
		 xmlhttp = new XMLHttpRequest();
		 		
		xmlhttp.open("GET","combinar.php?nombre="+document.getElementById('palabra').value,true);		
			
		xmlhttp.send();
		
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
