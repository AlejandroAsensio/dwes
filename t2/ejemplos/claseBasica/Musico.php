<?php
require_once 'Persona.php';
class Musico extends Persona{
    public function cantar(){
        echo "LALALA\n";
    }
    public function hablar(){
        echo "LOLOLO\N";
    }
}