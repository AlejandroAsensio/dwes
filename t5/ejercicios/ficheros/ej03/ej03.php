<?php
$texto = file_get_contents('../ej01/articulo.txt');
?>
<textarea rows="20" cols="30" readonly="readonly"><?= $texto?></textarea>
<form action="mostrarT.php">
<h3>Introduce una palabra</h3>
<input type="text" name="p"/><br/>
<input type="submit"/>
</form>

