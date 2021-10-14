<?php 
session_start();
session_unset();
?>
<form action="dos.php">
Indica el numero de sumandos(2..15)
	<input type="number" min="2" max="15" name="nSum"/><br/>
	<input type="submit" value="Enviar"/>
</form>