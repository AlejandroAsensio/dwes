<div class="container">
	<h1>Lista de aficiones</h1>
	
	<form action="<?= base_url()?>aficion/c">
		<input type="submit" value="Nueva afición"/>
	</form>
	
	<table class="table">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
		
		<?php foreach ($aficiones as $aficion):?>
		
		<tr>
			<td>
				<?=$aficion->nombre?>
			</td>
			<td class="row">
			<form id ="idFormU" action="<?= base_url().'aficion/u'?>">
			  	<input type="hidden" name="idAficion" value="<?=$aficion->id?>"/>
				<button onclick="document.getElementById('idFormU').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/lapiz.png'?>"/>
				</button>
			  </form>
			   <form id ="idFormD" action="<?= base_url().'aficion/d'?>" method="get">
			  	<input type="hidden" name="idAficion" value="<?=$aficion->id?>"/>
				<button onclick="document.getElementById('idFormD').submit()">
					<img width="15" height="15" src="<?= base_url().'assets/img/papelera.png'?>"/>
				</button>
				</form>
				</td>
		</tr>
		<?php endforeach;?>
	</table>
</div>