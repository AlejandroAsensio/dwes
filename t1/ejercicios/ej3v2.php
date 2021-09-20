<?php

echo "Introduce n :";
fscanf(STDIN, "%d\n", $n);

echo "Introduce p :";
fscanf(STDIN, "%d\n", $p);

for ($i = 1; $i <= $n; $i ++) {
    for ($j = 0; $j < $p; $j ++) {
        echo "$j ";
    }
}
echo "\n";
for($i = 0 ; $i< $n*$p ;$i++){
    echo $i%$p." ";
}
?>