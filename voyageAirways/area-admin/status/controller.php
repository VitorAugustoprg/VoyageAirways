<?php
require_once '../../model/status.php'; 

// instanciando um objeto chamado Admin
$status = new Status(); 



$status-> setId($_POST['id']);
$status-> setTipo($_POST['sobrenome']);

echo '<pre>';
print_r($status);
echo '</pre>';

?>