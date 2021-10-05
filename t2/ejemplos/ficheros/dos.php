<?php
$nombre = $_POST['nombre'];

$nombreArchivo = $_FILES['foto']['name'];

// $carpeta = 'D:/xampp/htdocs/fotos/';
$carpeta = '../../../assets/img/';

copy ($_FILES['foto']['tmp_name'],$carpeta . $nombreArchivo);

echo "<h1> Hola $nombre.
Recibido el archivo $nombreArchivo</h1>"
?>