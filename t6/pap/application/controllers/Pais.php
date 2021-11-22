<?php
class Pais extends CI_Controller{
    function r(){
        frame($this,'pais/r');
    }
    function c(){
        frame($this,'pais/c');
    }
    function cPost(){
        $nombre = isset($_POST['nombre'])? $_POST['nombre'] : 'ninguno';
        $this->load->model('Pais_model');
        $this->Pais_model->c($nombre);
        $bu = base_url();
        header("Location:{$bu}pais/r");
    }
}
?>