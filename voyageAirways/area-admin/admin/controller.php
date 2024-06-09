<?php
require_once '../../model/admin.php'; 

// instanciando um objeto chamado Admin
$admin = new Admin(); 



$admin -> setNome($_POST['nome']);
$admin -> setSobrenome($_POST['sobrenome']);
$admin -> setCpf($_POST['cpf']);
$admin -> setNasc($_POST['nasc']);
$admin -> setEmail($_POST['email']);
$admin -> setSenha($_POST['senha']);
$admin -> setImg($admin->salvarImagem(''));
$admin -> setToken($admin->generateToken());

echo '<pre>';
print_r($admin);
echo '</pre>';

?>