<?php
function getSaludos(){
    $db = new PDO("mysql:host=localhost;dbname=test", "root", "");
    $resultado = $db->prepare("select texto from saludos");
    $resultado->execute();
    $db = null;
    return $resultado->fetchAll();
}