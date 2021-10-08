<?php
include 'usuarios.php';
$user = isset($_GET['usuario']) ? $_GET['usuario'] : null;
$pwd = isset($_GET['pwd']) ? $_GET['pwd'] : null;

if (isset($usuarios[$user]) && $pwd == $usuarios[$user]) {
    if (isset($_COOKIE[$user])) {
        $cS = explode('-', $_COOKIE[$user]);
        $visita = $cS[0];
        $bandera = $cS[1];
    } else {
        $visita = 1;
        $bandera = 'uk';
    }
    // $check = ($bandera == )
    echo <<<HTML
    Conectado como $user. Numero de visitas $visita.<br/>
    <form action="login.php">
HTML;
    
    
    $pais = [
        'es',
        'uk',
        'fr'
    ];
    foreach ( $pais as $p ) {
        $check = $p == $bandera ? ' checked="checked"' : '';
        echo "<image src=\"fotos/$p.png\" width=\"27\" height=\"18\">" . PHP_EOL;
        echo "<input type=\"radio\" name=\"bandera\" id=\"idBandera\" value=\"$p\"" .
        $check . '>' . PHP_EOL;
    }
    

    echo <<<HTML
    <input type="submit" value="Desconectar"/>   
    
    <input type="hidden" name="usuario" value="$user"/>
    <input type="hidden" name="nVisita" value="$visita"/>
    
    </form>
    HTML;
} else {
    echo "No existe el usuario";
}

?>