<?php
$n = - 1000;
echo 'Introduce n: ';
fscanf(STDIN, "%d\n", $n);
$max = $n;
$min = $n;
while ($n != 0) {
    echo 'Introduce n: ';
    fscanf(STDIN, "%d\n", $n);
    if ($n != 0) {
        $min = ($n < $min) ? $n : $min;
        // if($n<$min){
        // $min = $n;
        // }
        $max = ($n > $max) ? $n : $max;
        // if($n > $max){
        // $max = $n;
        // }
    }
}

echo "\n";
echo "Maximo: $max \n";
echo "Minimo: $min \n";
?>
