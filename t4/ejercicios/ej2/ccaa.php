<?php 
include ('tCA.php');
?>

<script>
var xmlhttp;
	
	function usarAJAX() {
		
			
		
		 xmlhttp = new XMLHttpRequest()					
		xmlhttp.open("GET","cambiarCA.php?seleccionado="+document.getElementById('ccaa').value,true);		
			
		xmlhttp.send();
		
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("provincias").innerHTML=xmlhttp.responseText;
			}
		}
		
	}
</script>

<body>


<h1>Comunidades Autonomas</h1>

ccaa


<?php 

$ccaa = array_keys($BDccaa);
echo '<select name="ccaa" id="ccaa" onChange="usarAJAX()">';
 foreach($ccaa as $ca){
    echo <<<HTML
    
        <option value="$ca">$ca</option>
  HTML;
    
}
echo "</select></br>".PHP_EOL;

echo '<div id="provincias">Provincias'.PHP_EOL.'<select name="pv" id="pv">';
    foreach(current($BDccaa)as $pv){
    echo <<<HTML
        <option value="$pv">$pv</option>
  HTML;
}
echo "</select></div>".PHP_EOL;

?>
