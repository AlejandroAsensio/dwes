<?php
class Persona extends CI_Controller{
    function r(){
        $this->load->model('Persona_model');
        $data['personas'] = $this->Persona_model->getAll();
        frame($this,'persona/r',$data);
    }
    function c(){
        frame($this,'persona/c');
    }
    function cPost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'John Doe';
        $pais = isset($_POST['pais'])?$_POST['pais']:'ninguno';
        $aficiones = isset($_POST['aficiones'])?$_POST['aficiones']:'ninguna';
        $this->load->model('Persona_model');
        try{
              $this->Persona_model->c($nombre,$pais,$aficiones);
        }
        catch(Exception $e){
                
        }
    }
    
}