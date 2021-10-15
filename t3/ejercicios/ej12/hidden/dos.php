<?php
$nSumandos = isset($_GET['nSumandos'])? $_GET['nSumandos']:null;
$n = isset($_GET['n'])? $_GET['n']: null;
$paso = isset($_GET['paso'])? $_GET['paso'] : 1;


if($n == null){
   
}
else {
    setcookie('n',$_COOKIE['n']+1);
    $sumandos = unserialize($_COOKIE['sumandos']);
    $sumandos[] = $n;
    setcookie('sumandos',serialize($sumandos));
    
    if($_COOKIE['n']>$_COOKIE['nSumandos']){
        header("Location:tres.php");
       
    }
}

?>

<form>
	<h4>Introduce el sumando numero <?=$paso?>/ <?=$nSumandos?> (1..10)</h4>
	<input type="number" min="1" max="10" value="5" name="n"/>
	<input type="hidden" value="<?php $nSumandos?>" name="nSumandos"/>
	<input type="hidden" value="<?php $paso?>" name="paso"/>
	
	<br/>
	
	<input type="submit"/>
</form>