<?php
echo "Introduce linea de texto: \n";
fscanf(STDIN, "%s\n", $t);
echo "Introduce n: \n";
fscanf(STDIN, "%d\n", $n);

$cont = 1;
$bajar = false;
for ($i = 1; $i <= ($n * 2) - 1; $i ++) {
    if ($cont % $n == 0 || $bajar) {
        echo "<h$cont>$t</h$cont>\n";
        $cont --;
        $bajar = true;
    } 
    else if (! $bajar) {
        echo "<h$cont>$t</h$cont>\n";
        $cont ++;
    }
}

?>