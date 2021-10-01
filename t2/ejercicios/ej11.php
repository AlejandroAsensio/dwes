<?php
require_once "utilHTML.php";
echo pintarRadio('aficion', [
    'D' => 'Deporte',
    'C' => 'Cine',
    'T' => 'Television',
    'Co' => 'Comer'
], 'Co');