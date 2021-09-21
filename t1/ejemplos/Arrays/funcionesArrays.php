<?php
echo "Dame un numero (0 para terminar): ";
fscanf(STDIN,"%d\n",$n);


$numeros = [];

while ($n!=0){
//     array_push($numeros,$n);
//      Hace la misma funcion
    $numeros[] = $n;
    echo "Dame un numero (0 para terminar): ";
    fscanf(STDIN,"%d\n",$n);
    
}
echo in_array (10, $numeros)? "si" : "no";

// foreach($numeros as $k=> $numero){
// //     echo array_pop($numeros);
//         echo array_shift($numeros);
//     echo " ";
// }
// print_r($numeros);

?>