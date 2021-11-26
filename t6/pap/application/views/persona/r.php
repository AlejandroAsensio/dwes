<div class="container">
	<h1>Lista de Personas</h1>
	
	
	
	<table class="table table-striped align-middle table-bordered">
	<thead class="table-dark align-middle">
		<tr>
			<th>Nombre</th>
			<th>País nacimiento</th>
			<th>Aficiones (gustan)</th>
			<th>Acciones</th>
			<th><span class="btn btn-secondary text-warning btn-md" onclick="location.href = '<?= base_url()?>persona/c'">Crear nueva Persona</span></th>
			
		</tr>
	</thead>
		<tbody>
		<?php foreach ($personas as $persona):?>
		<tr>
			<td>
				<?= $persona->nombre?>
			</td>
			<td>
				<?= ($persona->nace_id) != null ? $persona->fetchAs('pais')->nace->nombre : ''?>
			</td>
			<td>
				<?php foreach ($persona->ownGustoList as $gusto):?>
					<?=$gusto->aficion->nombre?> 
				<?php endforeach;?>
			</td>
			
			<td>
			<form id ="idFormU" action="<?= base_url().'persona/u'?>">
			  	<input type="hidden" name="idPersona" value="<?=$persona->id?>"/>
				<button onclick="document.getElementById('idFormU').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/lapiz.png'?>"/>
				</button>
			  </form>
			   <form id ="idFormD" action="<?= base_url().'persona/d'?>" method="get">
			  	<input type="hidden" name="idAPersona" value="<?=$persona->id?>"/>
				<button onclick="document.getElementById('idFormD').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/papelera.png'?>"/>
				</button>
				</form>
				</td>
				<td>
				</td>
		</tr>
		<?php endforeach;?>
		</tbody>
	</table>
	
</div>