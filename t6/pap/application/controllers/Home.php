<?php
class Home extends CI_Controller{
    public function index() {
        frame($this, 'home/index');
//         $this->load->view('home/index');
    }
}