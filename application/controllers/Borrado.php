<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrado extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('prueba','url','form','borrado'));
        $this->load->database();
        $this->load->model('Users');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('borrado');
       
    }
    public function eliminar(){
       // $this->form_validation->set_error_delimiters('', '');
        
        $rules= valiBorrado();
        $this->form_validation->set_rules($rules);
     //  
      
        //VALIDACION DEL FORMULARIO:
       
        if ($this->form_validation->run() == FALSE) {
            //    $errores= array(
              //     'codigo_usuario' => form_error('codigo_usuario')
             //   );
               echo json_encode($errores);
              //  $this->output->set_status_header(400);
                $this->load->view('borrado');
              
        }
        else {
              $codigo_usuario=$this->input->post('codigo_usuario');
             $datos =$codigo_usuario;
              $data['menu'] = main_menu();
            if(!$this->Users->eliminar($datos)){
               $data['mensaje']='Datos borrados correctamente';
                $this->load->view('principal',$data);
            }else{
            $data['mensaje']='Datos no borrados correctamente';
                $this->load->view('borrado',$data);
            }
        }
        
    }

}
