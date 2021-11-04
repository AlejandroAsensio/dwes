<?php
$texto = file_get_contents('../ej01/articulo.txt');
?>
<textarea rows="20" cols="30" readonly="readonly"><?= $texto?></textarea>