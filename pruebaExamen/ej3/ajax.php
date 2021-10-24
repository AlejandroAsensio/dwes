<?php
$peliculas = [
    'Star Wars',
    'Titanic',
    'Crepúsculo',
    'Los juegos del hambre'
];

$canciones = [
    'Let it be',
    'Mediterráneo',
    'Close to the edge',
    'Bohemian rhapsody'
];
    

$n = rand(0, 3);
echo $_GET['click']=='p'? $peliculas[$n] : $canciones[$n];
?>