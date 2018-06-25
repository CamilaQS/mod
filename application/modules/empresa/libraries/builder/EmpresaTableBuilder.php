<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class EmpresaTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('mod_empresa');
    }

    function get_fields(){
        return  array(
                    'titulo' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '30'
                    ),
                    'texto' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200'
                    ),
                    'imagem' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '250'
                    )
                );
    }

    function get_data(){
        return array( 
            array(
            'titulo' => 'lalalala',  
            'texto' => 'lalalalala',
            'imagem' => 'lalalalala'
            ),
        );

    }

}
