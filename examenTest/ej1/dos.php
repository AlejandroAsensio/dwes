<form action="tres.php">
<fieldset>
<legend>Signos del zodiaco</legend>


<?php
$signos = [
    'Capricornio',
    'Acuario',
    'Piscis',
    'Aries',
    'Tauro',
    'Géminis',
    'Cáncer',
    'Leo',
    'Virgo',
    'Libra',
    'Escorpio',
    'Sagitario'
];
$meses = [
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
];

$inf = isset($_GET['inferior']) ? $_GET['inferior'] : 0;
$sup = isset($_GET['superior']) ? $_GET['superior'] : 12;
$check = '';
for ($i = $inf-1; $i < $sup; $i ++) {
    $check = ($i==$inf-1)? 'checked="checked"': '';
    echo <<<HTML
    <label for="$signos[$i]">$signos[$i]</label>
    <input type="radio" name="signo" id="$signos[$i]" value="$signos[$i]" $check/><br/>
HTML;
}


?>
</fieldset>
<fieldset>
<legend>Meses del año</legend>
<select name="mes">
<?php 
for ($i = $inf-1; $i < $sup; $i ++) {
    echo <<<HTML
   
        <option value="$meses[$i]">$meses[$i]</option>
HTML;
}

?>
</select>
</fieldset>
<input type="submit" value="Continuar"/>
</form>