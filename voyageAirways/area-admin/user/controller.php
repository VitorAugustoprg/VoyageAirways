<?php
require_once '../../model/user.php'; 

// instanciando um objeto chamado User
$user = new user(); 



$user -> setNome($_POST['nome']);
$user -> setSobrenome($_POST['sobrenome']);
$user -> setCpf($_POST['cpf']);
$user -> setNasc($_POST['nasc']);
$user -> setEmail($_POST['email']);
$user -> setSenha($_POST['senha']);
$user -> setGenero($_POST['genero']);
$user -> setNacionalidade($_POST['nacionalidade']);
$user -> setFone($_POST['fone']);
$user -> setImg($user->salvarImagem(''));


echo '<pre>';
print_r($user);
echo '</pre>';

?>