<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {
    function __construct(){        
        $this->load->database();
    }

    public function insertar($datos){
        if(!$this->db->insert('Usuarios', $datos)){
            return false;
        }
        return true;
        
    }

    public function eliminar($datos){
        $this->db->delete('Usuarios', array('codigo_usuario' => $datos));
            
        
    }




}