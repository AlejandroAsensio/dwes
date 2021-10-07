<?php
include 'usuarios.php';
$user = isset($_REQUEST['usuario'])? $_REQUEST['usuario']:null;
$pwd = isset($_REQUEST['pwd'])? $_REQUEST['pwd']:null;

if(isset($usuarios[$user]) && $pwd == $usuarios[$user]){
    if(isset($_COOKIE[$user])){
        $cS = explode('-',$_COOKIE[$user]);
        $visita = $cS[0];
        $bandera = $cS[1];
    }
    else{
        $visita = 1;
    }
    
    echo <<<HTML
Conectado como $user. Numero de visitas $visita.<br/>
<form action="login.php">
<input type="submit" value="Desconectar"/>
<image src="fotos/es.png" width="27" height="18">
<input type="radio" name="bandera" id="idBandera" value="es"/>

<image src="fotos/fr.png" width="27" height="18">
<input type="radio" name="bandera" id="idBandera" value="fr"/>

<image src="fotos/uk.png" width="27" height="18">
<input type="radio" name="bandera" id="idBandera" value="uk"/>

<input type="hidden" name="usuario" value="$user"/>
<input type="hidden" name="nVisita" value="$visita"/>

</form>
HTML;
}
else {
    echo "No existe el usuario";
}



?>