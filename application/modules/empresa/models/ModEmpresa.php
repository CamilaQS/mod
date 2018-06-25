<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'modules\empresa\libraries\component\Card.php';
include_once APPPATH.'modules\empresa\libraries\component\Text.php';
include_once APPPATH.'modules\empresa\libraries\component\Table.php';

class ModEmpresa extends MY_Model{


public function set_card() {
    $card = new Card();
    return $card->getHTML();
}

public function Text(){
	$text = new Text();
	return $text->getHTML();
}

public function Table(){
	$table = new Table();
	return $table->getHTML();
}


}