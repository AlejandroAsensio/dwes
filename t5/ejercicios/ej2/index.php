<form>
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="n"/><br/>

<label for="precio">Precio</label>
<input type="number" id="precio" name="p" step="0.01"/><br/>
<input type="submit" value="Insertar"/>


</form>
<?php 
require_once("../../../utilBD.php");
$bd = conectarMySQL();
$nombre = isset($_GET['n'])? $_GET['n'] : null;
$precio = isset($_GET['p'])? $_GET['p'] : null;
    
if($nombre!=null && $precio!=null){
    $insert = <<<SQL
insert into producto (nombre,precio)
values ("$nombre",$precio)
SQL;
    $bd->exec($insert);
}


$sql = <<<SQL
select nombre,precio
from producto
SQL;
$filas = $bd->query($sql);
foreach($filas as $fila){
    echo "Producto:".$fila['nombre']." -- Precio: ".$fila['precio']."<br/> \n";
}
?>
