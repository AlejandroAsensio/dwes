<form action="insertarBD.php">
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre"/><br/>

<label for="precio">Precio</label>
<input type="number" id="precio" name="precio" step="0.01"/><br/>
<input type="submit" name="opcion" value="Insertar"/>
<input type="submit" name="opcion" value="Preparar"/>
</form>




	


<h3>Productos ya insertados</h3>
<?php 
require_once '../../../utilBD.php';
session_start();
    $bd = conectarMySQL();
    $sql = <<<SQL
    select nombre,precio
    from producto
SQL;
    $filas = $bd->query($sql);
    
?>
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Precio</th>
	</tr>
	<?php foreach($filas as $fila):?>
	<tr>
		<td>
			<?=$fila['nombre']?>
		</td>
		<td>
			<?=$fila['precio']?>
		</td>	
	</tr>
	<?php endforeach;?>
</table>

<?php 
$productos = isset($_SESSION['productos'])?$_SESSION['productos']: null;
if($productos!=null){
    echo '<table border="1">
<tr><th>Nombre</th>
<th>Precio</th>';
foreach($productos as $p){
    
//     echo "Nombre: $p[0] Precio: $p[1]<br/>\n";
   echo <<<HTML
<tr>
    <td>$p[0]</td>
    <td>$p[1]</td>
</tr>
HTML;
}
}
else{
echo "<h4>Nada que insertar</h4>";
}
   
?>
</table>