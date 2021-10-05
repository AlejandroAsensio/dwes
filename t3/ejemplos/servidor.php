<?php 
$comida = isset($_COOKIE['comida'])?$_COOKIE['comida']:'No existe';
$prueba = isset($_COOKIE['prueba'])?$_COOKIE['prueba']:'No existe';
setcookie('prueba','le has dao');
setcookie('comida','tegusta');

?>
<h1>Hola desde el servidor</h1>

<ul>
	<li>Cookie 'comida':<?=$comida?></li>
	<li>Cookie 'prueba':<?=$prueba?></li>
</ul>
