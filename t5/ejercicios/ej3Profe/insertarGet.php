<form action="insertarPost.php">
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre"/><br/>

<label for="precio">Precio</label>
<input type="number" id="precio" name="precio" step="0.01"/><br/>
<input type="submit" value="Insertar" name="accion"/>
<input type="submit" value="Preparar" name="accion"/>

	
</form>
<?php if (isset($_SESSION['preparados'])):?>
<h3>Productos preparados</h3>
	<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Precio</th>
		</tr>
		<?php foreach($_SESSION['preparados'] as $p):?>
	<tr>
		<td>
			<?=$p['nombre']?>
		</td>
		<td>
			<?=$p['precio']?>
		</td>	
	</tr>
	<?php endforeach;?>
		</table>
		<?php endif;?>
<h3>Productos ya insertados</h3>
<?php 
require_once '../../../utilBD.php';
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