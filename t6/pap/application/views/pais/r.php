<div class="container">
	<h1>Lista de paises</h1>
	
	<form action="<?= base_url()?>pais/c">
		<input type="submit" value="Nuevo pais"/>
	</form>
	
	<table>
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
		
		<?php foreach ($paises as $pais):?>
		
		<tr>
			<td>
				<?=$pais->nombre?>
			</td>
			<td>
			  <form id ="idForm" action="<?= base_url().'pais/u'?>">
			  	<input type="hidden" name="idPais" value="<?=$pais->id?>"/>
				<button onclick="document.getElementById('idForm').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/lapiz.png'?>"/>
				</button>
				</form>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
</div>