<?php

$cxn = mysqli_connect('localhost','root','','provaav2');
if ($cxn->connect_error) {
    die("Falha na conexão: " . $cxn->connect_error);
}

?>
