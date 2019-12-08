<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper(array('prueba','url','form'));
        $this->load->database();
        $this->load->model('Users');
        $this->load->library(array('form_validation'));
    }

    public function index(){
        $this->load->view('registro');
    }
    
    public function nuevo(){
        $nombre=$this->input->post('nombre');
        $apellido=$this->input->post('apellido');
        $contraseña=$this->input->post('contraseña');

        //VALIDACION DEL FORMULARIO:
        $config = array(
            array(
                    'field' => 'nombre',
                    'label' => 'nombre de usuario',
                    'rules' => 'required|alpha_numeric'
            ),
            array(
                    'field' => 'apellido',
                    'label' => 'apellido de usuario',
                    'rules' => 'required|alpha_numeric',
            ),
            array(
                    'field' => 'contraseña',
                    'label' => 'contraseña de usuario',
                    'rules' => 'required|alpha_numeric'
            ),
        );
    
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
                $this->load->view('registro');
        }
        else {
            $datos =array(
                'nombre' =>$nombre,
                'apellido' =>$apellido,
                'contraseña' =>$contraseña,
            );
            $data['menu'] = main_menu();
            if(!$this->Users->insertar($datos)){
                $data['mensaje']='Error al insertar en la base de datos';
                $this->load->view('registro',$data);
            }
            $data['mensaje']='Datos guardados correctamente';
                $this->load->view('principal',$data);
        }
    }
}
?>