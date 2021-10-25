<?php
$canciones = 'ninguna';
switch (rand(1,4)){
    case 1:$canciones= 'Star Wars';break; 
    case 2:$canciones= 'Titanic';break;
    case 3:$canciones= 'Crepúsculo';break;
    case 4:$canciones= 'Los juegos del hambre';break;
}
echo $canciones;
?>