<?php

    function valiBorrado (){
        return array(
                array(
                    'field' => 'codigo_usuario',
                    'label' => 'codigo de usuario',
                    'rules' => 'required',
                    'errors' => array(
                         'required' => 'Debes introducir un %s.',
                     ),
               
                ),
        );
    }
?>