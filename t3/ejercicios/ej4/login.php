<?php
$user = isset($_GET['usuario'])? $_GET['usuario']: null;
$nVisita = isset($_GET['nVisita'])? $_GET['nVisita']: null;
$bandera = isset($_GET['bandera'])? $_GET['bandera']: null;

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