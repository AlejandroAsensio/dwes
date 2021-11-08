<h1>Crear persona</h1>
<form action="crearPersonaPost.php">
<label for="nPe">Nombre </label>
<input type="text" id="nPe" name="nombre"/><br/>
<label for="listaP">Pais</label>
<select name="pais" id="listaP">
<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar(){
    R::close();
}
conectar();
$paises = R::findAll('pais');
foreach($paises as $pais){
    echo "<option value=".$pais['nombre'].">{$pais['nombre']}</option>";
}
desconectar();
?>
</select>





<input type="submit" value="Crear"/>

</form>
