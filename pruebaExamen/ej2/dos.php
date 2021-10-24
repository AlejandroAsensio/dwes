<?php 
session_start();
$_SESSION['n1'] = $_POST['num1'];
?>

<h1>Introduce otro número</h1>
<form action="tres.php" method="POST">
<input type="number" name="num2" value="2"/>
<input type="submit" value="Siguiente"/>
</form>