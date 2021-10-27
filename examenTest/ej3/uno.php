<script>
var xmlhttp;
	function accionAJAX(t){	
		if(t=='p'){
	
		document.getElementById("peli").value=xmlhttp.responseText;
		}
		else{
		document.getElementById("cancion").value=xmlhttp.responseText;
		}
	}
	function f(t) {
		
			
		
		 xmlhttp = new XMLHttpRequest()			
		
		 		
		xmlhttp.open("GET","ajax.php?click="+t,true);
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				accionAJAX(t);
			}
		}
		
	}
	
</script>
<body>
<input type="button" value="Peli favorita"  onClick="f('p')"/>
<input type="text" id="peli" readonly="readonly"/><br/>
<input type="button" value="Canción favorita"  onClick="f()"/>
<input type="text" id="cancion" readonly="readonly"/>

</body>
