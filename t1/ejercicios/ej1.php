<?php
// echo "Introduce n\n";
// fscanf(STDIN, "%d\n", $n);
$min = 0;
$max = 0;

while ($n != 0) {
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n", $n);
    if (($n < $min) && ($n !== 0)) {
        $min = $n;
    } else if (($n > $max) && ($n !== 0)) {
        $max = $n;
    }
}
echo "Minimo: $min\n";
echo "Maximo: $max\n";

?>