<?php
session_start();
$suma = 0;
echo "<h1>";
foreach ($_SESSION['sums']as $k => $v){
    if($k == array_key_last($_SESSION['sums'])){
        echo $v ." = ";
    }
    else{
    echo $v. " + ";
    }
    $suma+=$v;
}
echo $suma;
echo "</h1>";

?>