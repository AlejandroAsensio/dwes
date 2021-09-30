<?php
echo "Has elegido los numeros: <br/>\n";
$selecteds = isset($_GET['numerosCk']) ? $_GET['numerosCk'] : [];
echo "<ul>\n";
if ($selecteds == []) {
    echo "<li>Ninguno</li>\n";
} else {
    foreach ($selecteds as $n) {
        echo "<li>$n</li>\n";
    }
}
echo "</ul>";
?>