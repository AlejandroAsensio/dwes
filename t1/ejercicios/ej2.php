<?php


function sig($c){
    switch ($c){
        case '+': $sol = '-';break;
        case '-': $sol = '.';break;
        case '.': $sol = '+';break;
    }
    return $sol;
}
$c = '.';

echo "Introduce n :";
fscanf(STDIN, "%d\n", $n);
for ($i = $n; $i >= 1; $i --) {
    for ($j = 1; $j <= $i; $j ++) {
        $c = sig($c);
        echo $c;
    }
    echo "\n";
    
}

?>