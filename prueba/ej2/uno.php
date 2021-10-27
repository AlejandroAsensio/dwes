<?php 
session_start();



$sustantivo = isset($_POST['palabra'])?$_POST['palabra']:null;
    
    if($sustantivo==null){
    $_SESSION['sustantivos'] = [];
}
    else{
    $_SESSION['sustantivos'][] = $sustantivo;
//     array_push($_SESSION['sustantivos'],$sustantivo);
}
    if(isset($_POST['accion'])&& $_POST['accion'] == 'Combinar'){
        header("Location:dos.php");
}
?>


<h1>Introduce un sustantivo regular</h1>
<form method="post">
<input type="text" name="palabra"/><br/>
<input type="submit" name="accion" value="Más sustantivos"/>
<input type="submit" name="accion" value="Combinar"/>
</form>
