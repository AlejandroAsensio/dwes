<?php

// Introducir sustantivos y mostrar en una lista las combinaciones posibles
function sacarRaiz($pal){
    $raiz = "";
    if (substr($pal, - 2, 2) == 'os' || substr($pal, - 2, 2) == 'as') {
        $raiz = substr($pal, 0, - 2);
    } else if (substr($pal, - 1, 1) == 'o' || substr($pal, - 1, 1) == 'a') {
        
        $raiz = substr($pal, 0, -1);
    }

    return $raiz;
}

function combinaciones($raiz){
    $sol = "";
    if($raiz == ''){
        $sol= "<h4>El sustantivo no tiene combinaciones</h4>";
    }
    else{
    $sol = <<<HTML

        <select>
            <option>{$raiz}o</option>
            <option>{$raiz}a</option>
            <option>{$raiz}os</option>
            <option>{$raiz}as</option>
        </select>
HTML;
    }
    return $sol;    
}

?>