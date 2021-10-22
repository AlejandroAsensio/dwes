<?php

$idioma = isset($_GET['idioma'])?$_GET['idioma']:'es';
$BDetiquetas = [
    "es" => [
        "Usuario",
        "Contraseña ",
        "Entrar"
    ],
    "en" => [
        "User",
        "Password",
        "Log In"
    ]
];



echo implode(':',$BDetiquetas[$idioma]);
?>