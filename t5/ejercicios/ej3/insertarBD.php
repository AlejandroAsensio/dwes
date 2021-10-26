<?php
require_once '../ej1/ej1Profe.php';

session_start();
   

$nombre = isset($_GET['nombre'])? $_GET['nombre']: null;
$precio = isset($_GET['precio'])? $_GET['precio']: null;
    
if($_GET['opcion']=='Insertar' && isset($_SESSION['productos'])){
    
        insertarProductos($_SESSION['productos']);
        session_destroy();
        header("Location:index.php");
    
    
 
}
else if($_GET['opcion']=='Preparar'){
    $_SESSION['productos'][] = [$nombre,$precio];
    header("Location:index.php");
    
}

else{
  echo "<h1>Datos insuficientes</h1>";  
}
?>