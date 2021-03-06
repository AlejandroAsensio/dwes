<?php
class Persona extends CI_Controller{
    
    public function r(){ 
        $this->load->model('Persona_model');
        $data['personas'] = $this->Persona_model->getAll();
        frame($this,'persona/r',$data);
    }
    
    public function c(){
        $this->load->model('Pais_model');
        $data['paises'] = $this->Pais_model->getAll();
        
        $this->load->model('Aficion_model');
        $data['aficiones'] = $this->Aficion_model->getAll();
        
        frame($this,'persona/c',$data);
    }
    
    public function cPost(){
        $nombre = isset($_POST['nombre'])? $_POST['nombre']: 'John Doe';
        $idPaisNace = isset($_POST['idPaisNace'])? $_POST['idPaisNace']: null;
        $idAficionGusta = isset($_POST['idAficionGusta'])? $_POST['idAficionGusta']: [];
        
        $this->load->model('Persona_model');
        
        try{
            $this->Persona_model->c($nombre,$idPaisNace,$idAficionGusta);
            redirect(base_url().'persona/r');
        }
        catch(Exception $e){
            errorMsg($e->getMessage(),'persona/c');
        }
        
    }
    
    
}
?>