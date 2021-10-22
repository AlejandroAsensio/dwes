<?php
$idioma = isset($_GET['idioma'])?$_GET['idioma']:'es';

$BDjuego = [
    'es' => [
        'Introduce un numero',
        'Jugar',
        'Mi numero',
        'Tu numero',
        'Perdiste, tu numero es mayor',
        'Perdiste, tu numero es menor',
        'Enhorabuena, has acertado',
        'Volver'
    ],
    'en' => [
        'Introduce a number',
        'Play',
        'My number',
        'Your number',
        'You lost, your number is higher',
        'You lost, your number is lower',
        'Congratulations, you won',
        'Back'
    ]
];
echo  implode(':', $BDjuego[$idioma]);
?>