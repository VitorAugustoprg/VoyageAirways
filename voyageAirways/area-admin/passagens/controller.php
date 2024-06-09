<?php
require_once '../../model/passagem.php'; 

// instanciando um objeto chamado passagem
$passagem = new passagem(); 



$passagem -> setNome($_POST['nome']);
$passagem -> setCapital($_POST['capital']);
$passagem -> setPreco($_POST['preco']);
$passagem -> setOrigem($_POST['origem']);
$passagem -> setDestino($_POST['destino']);
$passagem -> setImg($passagem->salvarImagem(''));


echo '<pre>';
print_r($passagem);
echo '</pre>';

?>