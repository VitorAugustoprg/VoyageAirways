<?php

session_start();

$usuarios_app = array(
    array('id' => 1, 'email' => 'vitor@gmail.com', 'senha' => '2905'),
    array('id' => 2, 'email' => 'andre@gmail.com', 'senha' => '1234')
);

session_start();

$usuario_autenticado = false;

foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado == true) {
    //echo "Usuário Autenticado";
    $_SESSION['autenticado'] = "SIM";
    header('Location: passagens.php');
}else {
    //echo "Erro na autenticação do Usuário";
    $_SESSION['autenticado'] = "NÃO";
    header('Location: login.php?login=erro');
    //header("HTTP/1.1 404 Not Found");
}
?>
