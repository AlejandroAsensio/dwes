<?php
$user = isset($_REQUEST['usuario'])? $_REQUEST['usuario']: null;
$nVisita = isset($_REQUEST['nVisita'])? $_REQUEST['nVisita']: null;
$bandera = isset($_REQUEST['bandera'])? $_REQUEST['bandera']: null;

if($user==null && $nVisita ==null && $bandera==null){
    $texto =  "Primera vez";;
}
else {
    setcookie($user,($nVisita+1).'-'.$bandera);
    $texto = "Adios $user";
}
echo <<<HTML
<form action="conectado.php">
<h1>Tratamiento de cookies</h1>
$texto. Usted no esta conectado<br/>
<label for="usuario">Usuario</label><input type="text" id="usuario" name="usuario"/><br/>
<label for="pwd">Contraseña</label><input type="password" id="pwd" name="pwd"/><br/>
<input type="submit" value="Autenticar"/>
</form>
HTML;

?>