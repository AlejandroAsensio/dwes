<?php
session_start();
if(isset($_GET['nSum'])&& !isset($_SESSION['nSum'])){
    $_SESSION['nSum'] = $_GET['nSum'];
    $_SESSION['nA'] = 1;
    $_SESSION['sums'] = [];
}

if(isset($_POST['sumando'])){
    $_SESSION['nA']++;
    $_SESSION['sums'][] = $_POST['sumando'];
}

if($_SESSION['nA']>$_SESSION['nSum']){
    header("Location:tres.php");
}

else{
echo <<<HTML
<form method="POST">
Introduce el sumando numero {$_SESSION['nA']} (1..10)
<input type="number" min="1" max="10" name="sumando"/><br/>
<input type="submit"/>
</form>
HTML;
}
?>