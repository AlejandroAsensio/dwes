<?php
$numero = (int) ($_GET['numeros']);
echo "<form action='ejInventServ2.php'>\n";
for ($i = 1; $i <= $numero; $i ++) {
    echo "<input type='checkbox' id='n$i' name='numerosCk[]' value='$i'/>";
    echo "<label for='n$i'>$i</label><br/>\n";
}
echo "<input type='submit'/>
</form>"
?>
