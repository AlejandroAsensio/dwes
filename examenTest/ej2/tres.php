<?php
session_start();
    $texto = "";
    if($_SESSION['n1']<$_POST['num2']){
        $texto = "MENOR";
    }
    else  if($_SESSION['n1']>$_POST['num2']){
        $texto = "MAYOR";
    }
        else {
            $texto = "IGUAL";
        }
echo <<<HTML
    Primer número: {$_SESSION['n1']}<br/>\n
    Segundo número: {$_POST['num2']}<br/>\n
    EL primero número es $texto que el segundo
HTML;
?>
    