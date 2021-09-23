<?php
echo "N: \n";
fscanf(STDIN, "%d\n", $n);
echo "Formato: \n";
fscanf(STDIN, "%s\n", $form);
$f = [
    "romano" => [
        "i",
        "ii",
        "iii",
        "iv",
        "v",
        "vi",
        "vii",
        "viii",
        "ix",
        "x"
    ],
    "nombre" => [
        "uno",
        "dos",
        "tres",
        "cuatro",
        "cinco",
        "seis",
        "siete",
        "ocho",
        "nueve",
        "diez"
    ]
];

for($i=0;$i<$n;$i++){
    echo "{$f[$form][$i]}, ";
}

?>

