<?php 
require_once '../bd/bdh.php';
conectar();
$paises = R::findAll('pais');
?>
<h1>Nueva Persona</h1>
<form action="cPersonaPost.php" method="post">
    <label for="nP">Nombre </label>
    <input type="text" id="nP" name="nombre" required="required"/>
    <br/><br/>
    
    País
    <select name="idPais">
    <?php foreach ($paises as $pais):?>
    	<option value="<?= $pais->id?>">
    		<?= $pais->nombre ?>
    		
    		</option>
    <?php endforeach;?>
    </select>
    
    <input type="submit" value="Crear"/>
</form>