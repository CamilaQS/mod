<?php

class Table{
	public function getHTML(){
		return '
		<form method="POST" action="../deleta_tudo.php">
		<!--Table-->
<table class="table">
<div class="col-offset-8">
    <!--Table head-->
    <thead>
        <tr>
            <th>#</th>
            <th>Texto</th>
            <th>Link imagem</th>
            <th>Deletar</th>
        </tr>
    </thead>
  <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><button type="button" class="btn btn-danger btn-sm">Deletar</button></td>
        </tr>
        
        
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
</form>';}
	}