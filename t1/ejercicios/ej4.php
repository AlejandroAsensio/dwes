<?php
function operacion ($o){
    switch ($o){
        case "sumar":
       
        case "muliplicar":
        
    }
}
function memoria (...$m){
    
}
$n = 100;
echo 'Introduce n: ';
fscanf(STDIN, "%d\n", $n);

while ($n != 0) {
    echo 'Introduce n: ';
    fscanf(STDIN, "%d\n", $n);
    if ($n != 0) {
        memoria();
        // if($n<$min){
        // $min = $n;
        // }
       
        // if($n > $max){
        // $max = $n;
        // }
    }
}

?>