<?php
require_once 'Servivo.php';
class Persona implements Servivo{
    
    public function hablar()
    {
        echo "BLABLABLA\n";
    } 
    
    private $nombre;
    private $edad;
    
    public function __construct($nombre='John Doe',$edad=10){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    public function dimeNombre(){
        echo "Mi nombre es: {$this->nombre}\n";
    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function __toString(){
        
        return "{$this->nombre} ({$this->edad})";
    }
    


}

?>