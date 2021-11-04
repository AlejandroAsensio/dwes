<?php
$texto = file_get_contents('../ej01/articulo.txt');
?>
<textarea rows="20" cols="30" readonly="readonly"><?= $texto?></textarea>
<form action="resaltar.php">
<h3>Introduce una palabra</h3>
<input type="text" name="p"/><br/>
<select name="color">
<option value="red">Rojo</option>
<option value="blue">Azul</option>
<option value="yellow">Amarillo</option>
<option value="brown">Marron</option>
<option value="pink">Rosa</option>
</select><br/>
<input type="checkbox" name="negrita"/>Negrita
<input type="checkbox" name="sub" />Subrayado

<input type="submit"/>
</form>


