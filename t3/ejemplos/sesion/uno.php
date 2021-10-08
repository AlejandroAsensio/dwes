<?php 
session_start();
// $_SESSION['caca']='we';
// unset($_SESSION['visitas']);
if( isset($_SESSION['visitas'])){
    $_SESSION['visitas']++;
    
}
else {
    $_SESSION['visitas']=1;
}
   
// unset($_SESSION['caca']);
//(isset($_SESSION['visitas']))?
//++$_SESSION['visitas']: $_SESSION['visitas']=1
 ?>
 
<h1>Bienvenido</h1>
<h3>Es tu visita numero <?= $_SESSION['visitas']?></h3>
<a href="fin.php">Terminar la visita</a>