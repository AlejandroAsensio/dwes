<h1>DOS</h1>
<?php 
$nombre =isset($_GET['nombre'])? $_GET['nombre']: 'John';
$apellido = isset($_GET['apellido'])?$_GET['apellido']:'Doe';
echo "<h3>Hola $nombre $apellido</h3>";
?>
