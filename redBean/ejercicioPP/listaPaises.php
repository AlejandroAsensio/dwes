<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar(){
    R::close();
}
?>
<table border="1">
<caption>Nombre de paises</caption>
<?php
conectar();
$paises = R::findAll('pais');
foreach($paises as $pais){
    echo "<tr><th>{$pais['nombre']}</th></tr>";
}
desconectar();
?>

</table>
<form action="crearPersona.php">
<br/>
<input type="submit" value="Siguiente"/>
</form>