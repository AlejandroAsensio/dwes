<?php
echo "Introduce linea de texto: \n";
fscanf(STDIN, "%s\n", $t);
echo "Introduce n: \n";
fscanf(STDIN, "%d\n", $n);

$cont = $n;

for ($i = 1; $i < ($n * 2); $i ++) {
    if ($i < $n) {
        echo "<h$i>$t</h$i>\n";
    } else {
        echo "<h$cont>$t</h$cont>\n";
        $cont --;
    }
}

?>