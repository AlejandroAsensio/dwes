<div class="container">
	<h1>Lista de paises</h1>
	
	<form action="<?= base_url()?>pais/c">
		<input type="submit" value="Nuevo pais"/>
	</form>
	
	<table class="table">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
		
		<?php foreach ($paises as $pais):?>
		
		<tr>
			<td>
				<?=$pais->nombre?>
			</td>
			<td class="row">
			  <form id ="idFormU" action="<?= base_url().'pais/u'?>">
			  	<input type="hidden" name="idPais" value="<?=$pais->id?>"/>
				<button onclick="document.getElementById('idFormU').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/lapiz.png'?>"/>
				</button>
			  </form>
			   <form id ="idFormD" action="<?= base_url().'pais/d'?>" method="get">
			  	<input type="hidden" name="idPais" value="<?=$pais->id?>"/>
				<button onclick="document.getElementById('idFormD').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/papelera.png'?>"/>
				</button>
				</form>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
</div>