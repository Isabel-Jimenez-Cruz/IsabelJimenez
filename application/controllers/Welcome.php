<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->helper(array('prueba','url','form'));
    }
    public function index(){
        $data['menu'] = main_menu();
        $data['mensaje']='Bienvenidos! ';
        $this->load->view('principal', $data);
    }
}
