<?= titulo('Lista de links')?>

<ul>
<?php foreach($links as $etiqueta=>$url):?>

	<li>
		<?= anchor($url,$etiqueta)?>
		
	</li>
<?php endforeach;?>
</ul>
<form action="<?= base_url()?>">
<input type="submit" value="Volver a home"/>
</form>
