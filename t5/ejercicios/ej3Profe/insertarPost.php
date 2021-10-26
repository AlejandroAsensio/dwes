<?php
require_once '../ej1/ej1Profe.php';
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;
$precio = isset($_GET['precio']) ? $_GET['precio'] : null;

if ($_GET['accion'] == 'Insertar') {
    if ($nombre != null && $precio != null) {
        insertarProductos([
            [
                $nombre,
                $precio
            ]
        ]);
        header("Location:insertarGet.php");
    }
 else {
    echo "<h1>Datos insuficientes</h1>";
 }
}
else{
    session_start();
    $_SESSION['preparados'][] = [$nombre,$precio];
}
?>