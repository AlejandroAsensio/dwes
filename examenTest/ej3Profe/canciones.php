<?php

$canciones = 'ninguna';
switch (rand(1,4)){
    case 1:$canciones= 'Let it be';break;
    case 2:$canciones= 'Mediteráneo';break;
    case 3:$canciones= 'Close to the edge';break;
    case 4:$canciones= 'Bohemian rhapsody';break;
}
echo $canciones;
?>