<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/MenuBuilder.php';


class MenuTableBuilder extends MenuBuilder{

    function __construct(){
        parent::__construct('empresa');
    }

    function get_data(){
        // páginas básicas: index e edit
        $base = parent::get_data();

        // páginas extras: funcionalidades adicionais do módulo
        $data = array(
            
            array(
                'label'  => 'Inserir', 
                'link'   => $this->mod_name.'/insere_tudo',
                'name'   => $this->prefix.'insere_tudo',
                'module' => $this->mod_name
            ),
            array(
                'label'  => 'Deletar', 
                'link'   => $this->mod_name.'/deleta_tudo',
                'name'   => $this->prefix.'deleta_tudo',
                'module' => $this->mod_name
            )

        );

        return array_merge($base, $data);
    }
}
