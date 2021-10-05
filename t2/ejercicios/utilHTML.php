<?php

function resaltar($texto){
    
    return "<h1>$texto</h1>";
}

function pintarRadio($nombre,$arrayValueLabel,$seleccionado){
    $texto="";

    foreach($arrayValueLabel as $k => $v){
        $seleccionar = ($k==$seleccionado)? 'checked="checked"':'';
      
        $texto .=<<<HTML
<input type='radio' id='$k' name='$nombre' value='$arrayValueLabel[$k]' $seleccionar/>
\n<label for='$k'>$v</label><br/>\n       
HTML;
    }
    return $texto;
    
}
function pintarCheckboxes($nombre,$arrayValueLabel,$seleccionados){
    $texto="";
    
    foreach($arrayValueLabel as $k => $v){
       $seleccion = (in_array($k, $seleccionados))? 'checked="checked"':'';
        
        $texto .=<<<HTML
<input type='checkbox' id='$k' name='{$nombre}[]' value='$arrayValueLabel[$k]' $seleccion/>
<label for='$k'>$v</label><br/>\n

HTML;
    }
    return $texto;
    
}
function pintarSelect($nombre,$arrayValueLabel,$multiple){
    $mult = ($multiple)? 'multiple="multiple"': '';
    $texto = '';
    $texto .= "<select id='$nombre' $mult>";//TODO
    foreach ($arrayValueLabel as $valor){
        
        $texto.=<<<HTML
   
        <option value="$valor">$valor</option>\n
HTML;
    }
    $texto .= '</select>';
    return $texto;
}
?>