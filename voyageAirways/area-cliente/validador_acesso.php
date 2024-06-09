<?php
session_start();

if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NÃO') {
    header('Location: login.php?login=erro2');
}
?>