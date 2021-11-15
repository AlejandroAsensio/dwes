<?php 
    require_once '../bd/bdh.php';
    conectar();
// $personas = R::findAll('persona');
    $personas = R::find('persona','nace_id is null');
desconectar();
?>

<h1>Crear país</h1>
<form action="cPaisPost.php" method="post">
<label for="nP">Nombre </label>
<input type="text" id="nP" name="nombre"/><br/><br/>
<fieldset>
	<legend>Lista de ciudadanos potenciales</legend>
	<?php foreach ($personas as $persona):?>
		<?php //if($persona->nace->id==null):?>
	<input type="checkbox" id="id-<?= $persona->id?>" value="<?$persona->id?>" name="idPersona[]"/>
	<label for="id-<? $persona->id?>"><?=$persona->nombre?></label>
	<?php //endif;?>
	<?php endforeach;?>
	</fieldset>
<input type="submit" value="Crear"/>

</form>