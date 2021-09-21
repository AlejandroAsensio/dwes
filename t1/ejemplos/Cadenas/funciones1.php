<?php
$mensaje ="Buenos dias";
$a = [[1,2],100];
echo <<<HTML
<body>
<h1>Cabecera</h1>
<h3>$mensaje</h3>
<h4>{$a[0][1]}</h4>
</body>
HTML;



?>