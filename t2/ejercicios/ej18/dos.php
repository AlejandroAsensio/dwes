<?php
$numero = isset($_GET['numero']) ? $_GET['numero'] : 1;
$numero = ($numero > 15) ? 15 : $numero;
$numero = ($numero<1) ? 1:$numero;
$numeros = [
    'Uno',
    'Dos',
    'Tres',
    'Cuatro',
    'Cinco',
    'Seis',
    'Siete',
    'Ocho',
    'Nueve',
    'Diez',
    'Once',
    'Doce',
    'Trece',
    'Catorce',
    'Quince'
];
echo "<form action='tres.php'><br/>
            Selecciona una opcion
            <br/>";
for ($i = 0; $i < $numero; $i ++) {
    $env = $i + 1;
    echo <<<HTML
        
            
            <input type="radio" id="$env" name="s" value="$env"/>
            <label for="$env">$numeros[$i]</label>
            <br/>
HTML;
    
}
echo '
            <input type="submit"/>
</form>'
?>