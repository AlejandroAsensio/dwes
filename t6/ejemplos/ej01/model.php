<?php

function getPersonas(){
    $db = new PDO("mysql:host=localhost;dbname=test", "root", "");
    $resultado = $db->query("select id,nombre as nom from persona");
    return $resultado;
}
?>