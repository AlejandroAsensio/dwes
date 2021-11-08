<?php 
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
desconectar();
?>

<h1>Lista de países</h1>

<form action="../cPais/cPaisGet.php">
	<input type="submit" value="Nuevo país"/>
</form>
<table border="1">
	<tr>
		<th>Nombre</th>
	</tr>
	<?php foreach($paises  as $pais):?>
	
		<tr>
			<td><?= $pais->nombre?>
			</td>
		</tr>
		
	<?php endforeach;?>
</table>
