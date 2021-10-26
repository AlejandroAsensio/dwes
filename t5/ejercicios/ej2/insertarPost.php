<?php
require_once '../ej1/ej1Profe.php';
$nombre = isset($_GET['nombre'])? $_GET['nombre']: null;
$precio = isset($_GET['precio'])? $_GET['precio']: null;

if($nombre!=null && $precio!= null){
        insertarProductos([[$nombre,$precio]]);
        header("Location:insertarGet.php");
}
else{
  echo "<h1>Datos insuficientes</h1>";  
}
?>