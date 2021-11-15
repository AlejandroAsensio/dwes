<?php 
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
$aficiones = R::findAll('aficion');
desconectar();
?>
<h1>Nueva Persona</h1>
<form action="cPersonaPost.php" method="post">
    <label for="nP">Nombre </label>
    <input type="text" id="nP" name="nombre" required="required"/>
    <br/><br/>
    
    País nacimiento
    <select name="idPaisN">
    <?php foreach ($paises as $pais):?>
    	<option value="<?= $pais->id?>">
    		<?= $pais->nombre ?>
    		
    		</option>
    <?php endforeach;?>
    </select>
    
     País Residencia
    <select name="idPaisV">
    <?php foreach ($paises as $pais):?>
    	<option value="<?= $pais->id?>">
    		<?= $pais->nombre ?>
    		
    		</option>
    <?php endforeach;?>
    </select>
    
    
    <fieldset>
    <legend>Aficiones que me gustan</legend>
    	<?php foreach ($aficiones as $aficion):?>
    
    		<input type="checkbox" id="idg-<?= $aficion->id ?>" name="idAficionesGusta[]" value="<?= $aficion->id ?>"/>
    		<label for="idg-<?= $aficion->id ?>"><?= $aficion->nombre ?></label>
    		
    	<?php endforeach;?>
    </fieldset>
    
    <fieldset>
    <legend>Aficiones que aborrezco</legend>
    	<?php foreach ($aficiones as $aficion):?>
    
    		<input type="checkbox" id="ido-<?= $aficion->id ?>" name="idAficionesOdio[]" value="<?= $aficion->id ?>"/>
    		<label for="ido-<?= $aficion->id ?>"><?= $aficion->nombre ?></label>
    		
    	<?php endforeach;?>
    </fieldset>
    
    <br/>
    <input type="submit" value="Crear"/>
</form>