<?php
session_start();

function suma($sumandos){
    $suma = 0;
    foreach($sumandos as $s){
        $suma+=$s;
        
    }
    return $suma;
    
}
?>
<h1>

<?php foreach ($_SESSION['sumandos'] as $k => $sumando):?>
   <?php  $simbolo = $k==sizeof($_SESSION['sumandos'])-1? '=':'+';?>
   <?=$sumando.$simbolo;?> 
<?php endforeach;?>

<?= suma($_SESSION['sumandos']);?>
</h1>
<a href="uno.php">Volver</a>

