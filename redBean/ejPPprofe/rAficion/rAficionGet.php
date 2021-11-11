    <?php 
require_once '../bd/bdh.php';
conectar();
$aficiones = R::findAll('aficion');
desconectar();
?>

<h1>Lista de aficiones</h1>

<form action="../cAficion/cAficionGet.php">
	<input type="submit" value="Nueva afición"/>
</form>
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Personas aficionadas</th>
		
	</tr>
	<?php foreach($aficiones  as $aficion):?>
	
		<tr>
			<td>
				<?= $aficion->nombre?>
			</td>
			<td>
				<?php foreach($aficion->sharedPersonaList as $persona):?>
					<?= $persona->nombre?>
				<?php endforeach;?>
			</td>
			
		</tr>
		
	<?php endforeach;?>
</table>
