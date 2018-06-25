<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/ConfigBuilder.php';


class ConfigTableBuilder extends ConfigBuilder{

    function __construct(){
        parent::__construct('empresa');
    }

    function get_data(){
        // parâmetros básicos de configuração
        $base = parent::get_data();

        // parâmetros específicos de configuração
        $data = array(
             array(
                'nome' => $this->prefix.'insere_imagem', 
                'valor' => true,
                'descricao' => 'Insere a imagem',
                'admin_only' => 1
            ),
            array(
                'nome' => $this->prefix.'exibe_imagem', 
                'valor' => true,
                'descricao' => 'Exibir a imagem ou não',
                'admin_only' => 0
            ),
              array(
                'nome' => $this->prefix.'deletar_imagem', 
                'valor' => true,
                'descricao' => 'Permite que delete a imagem',
                'admin_only' => 1
            ),
            array(
                'nome' => $this->prefix.'insere_texto', 
                'valor' => true,
                'descricao' => 'Insere o texto',
                'admin_only' => 1
            ),
            array(
                'nome' => $this->prefix.'exibe_texto', 
                'valor' => true,
                'descricao' => 'Exibe o texto',
                'admin_only' => 0
            ),
            array(
                'nome' => $this->prefix.'Deletar_texto', 
                'valor' => true,
                'descricao' => 'Permite deletar o texto',
                'admin_only' => 1
            )
        );
        
        return array_merge($base, $data);
    }
}
