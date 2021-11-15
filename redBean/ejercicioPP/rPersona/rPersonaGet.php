<?php 
require_once '../bd/bdh.php';
conectar();
$personas = R::findAll('persona');
desconectar();
?>

<h1>Lista de personas</h1>

<form action="../cPersona/cPersonaGet.php">
	<input type="submit" value="Nueva persona"/>
</form>
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Pais de nacimiento</th>
		<th>Pais de residencia</th>
		<th>Aficiones que gustan</th>
		<th>Aficiones que odia</th>
	</tr>
	<?php foreach($personas  as $persona):?>
	
		<tr>
			<td>
				<?= $persona->nombre?>
			</td>
			
			<td>
				<?= $persona->fetchAs('pais')->nace->nombre?>
			</td>
			
			<td>
				<?= $persona->fetchAs('pais')->vive->nombre?>
			</td>
			
			<td>
				<?php //foreach($persona->aggr('ownGustaList','aficion')as $aficion):
				        foreach($persona->ownGustaList as $gusto):?>
					<?=$gusto->aficion->nombre //$aficion->nombre ?>
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach($persona->aggr('ownOdioList','aficion')as $aficion):?>
					<?=$aficion->nombre ?>
				<?php endforeach;?>
			</td>
			
		</tr>
		
	<?php endforeach;?>
</table>
<br/>
<form action="../home/home.php">
<input type="submit" value="Volver"/>
</form>