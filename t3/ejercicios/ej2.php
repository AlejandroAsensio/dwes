<?php
$condicion = ! isset($_COOKIE['nVisita']);
$numVeces = $_COOKIE['nVisita'];
if ($condicion) {
    setcookie('nVisita', 2);
    header('Prueba:Cabezon');
    echo "<h1>Bienvenido</h1>";
}
else if($numVeces==26){
    echo "<h1>Eres tonto</h1>";
    setcookie('nVisita', $numVeces + 1);
}
else {
    $numVeces = $_COOKIE['nVisita'];
    setcookie('nVisita', $numVeces + 1);
    echo "<h1>Hola es la vez numero $numVeces que visitas esta pagina";
}
?>