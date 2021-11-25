<div class="container">
	<h1>Lista de Personas</h1>
	
	<form action="<?= base_url()?>persona/c">
		<input type="submit" value="Nueva Persona"/>
	</form>
	<div class="table-responsive">
	<table class="table table-striped align-middle">
	<thead class="table-dark align-middle">
		<tr>
			<th>Nombre</th>
			<th>País nacimiento</th>
			<th>Aficiones (gustan)<span class="btn btn-secondary text-warning btn-md float-right" onclick="location.href = '<?= base_url()?>persona/c'">Crear nueva Persona</span></th>
			
		</tr>
	</thead>
		
		<?php foreach ($personas as $persona):?>
		<tr>
			<td>
				<?= $persona->nombre?>
			</td>
			<td>
				<?= $persona->fetchAs('pais')->nace->nombre?>
			</td>
			<td>
				<?php foreach ($persona->ownGustoList as $gusto):?>
					<?=$gusto->aficion->nombre?> 
				<?php endforeach;?>
			</td>
		</tr>
		<?php endforeach;?>
		
	</table>
	</div>
</div>