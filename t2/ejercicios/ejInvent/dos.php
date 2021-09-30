<h1>Paso 2: Selecciona un/unos checkbox</h1>
<?php
$numero = isset($_GET['numeros']) ? $_GET['numeros'] : 3;
$numero = ($numero > 5) ? 5 : $numero;
$numeros = [
    'Uno',
    'Dos',
    'Tres',
    'Cuatro',
    'Cinco'
];

echo <<<HTML
<form action='tres.php'>\n
HTML;
for ($i = 0; $i < $numero; $i ++) {
    $env = $i + 1;
    echo <<<HTML
    <input type='checkbox' id='n$i' name='numerosCk[]' value='$env'/>
    <label for='n$i'>$numeros[$i]</label><br/>
HTML;
}
echo <<<HTML
<input type='submit'/>
</form>
HTML;

?>

