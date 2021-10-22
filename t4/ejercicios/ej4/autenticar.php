<?php
include 'BDusuarios.php';

if (isset($BDusuarios[$_GET['usuario']]) &&
    $_GET['pwd'] == $BDusuarios[$_GET['usuario']]) {
        
        header("Location:juego.php");
}
else{
    if(isset($_GET['bandera'] )){
        $idioma = $noValido[$_GET['bandera']];
    }
        
    echo "<h1>$idioma</h1>";
    echo <<<HTML
    <form action="login.php">
    <input type="submit" value="Volver"/>
    
</form>
HTML;
}

