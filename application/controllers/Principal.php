<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('prueba','url','form'));
    }
    public function index(){
        $data['menu'] = main_menu();
        $this->load->view('principal', $data);
    }
}