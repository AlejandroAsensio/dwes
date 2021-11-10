<?php 
require_once '../bd/bdh.php';
conectar();
$personas = R::findAll('persona');
desconectar();
?>

<h1>Lista de personas</h1>

<form action="../cPersona/cPersonaGet.php">
	<input type="submit" value="Nuevo país"/>
</form>
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Pais de nacimiento</th>
	</tr>
	<?php foreach($personas  as $persona):?>
	
		<tr>
			<td>
				<?= $persona->nombre?>
			</td>
			<td>
				<?= $persona->pais->nombre?>
			</td>
		</tr>
		
	<?php endforeach;?>
</table>
