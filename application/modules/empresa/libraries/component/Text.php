<?php

class text{
	public function getHTML(){
		return'
		<form method="POST" action="../insere_tudo.php"
		<div class="col-md-4">
		<div class="form-group">
    <label for="exampleFormControlTextarea3">Texto para a imagem:</label>
    <textarea class="form-control" id="exampleFormControlTextarea3" rows="10"></textarea>
</div>
<p>
<div class="form-group">
    <label for="exampleFormControlTextarea3">Link para a imagem:</label>
    <textarea class="form-control" id="exampleFormControlTextarea3" rows="10"></textarea>
</div>
<p>

<button type="button" class="btn btn-primary">Enviar</button>
</form>
';
	}

}