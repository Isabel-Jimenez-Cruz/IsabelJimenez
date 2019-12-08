<?php

    function main_menu (){
        return array(
                array(
                    'title'=>'Registro',
                    'url'=>base_url('/index.php/registro'),
                ),
                array(
                    'title'=>'Borrado',
                    'url'=>base_url('/index.php/borrado'),
                ),
        );
    }
?>