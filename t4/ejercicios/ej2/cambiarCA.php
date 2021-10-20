<?php
include ('tCA.php');
echo 'Provincias<select name="pv" id="pv">';
foreach($BDccaa[$_GET['seleccionado']] as $pv){
    echo <<<HTML
        <option value="$pv">$pv</option>
  HTML;
}
echo "</select>";
?>