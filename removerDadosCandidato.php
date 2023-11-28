<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include ("cnx.php");
    if ($cxn->connect_error) {
        die("Falha na conexão: " . $cxn->connect_error);
    }
    $id = $_POST['id'];
    $sql = "DELETE FROM candidato WHERE idcandidato = $id";
    if ($cxn->query($sql) === TRUE) {
        echo "Dados removidos com sucesso";
    } else {
        echo "Erro ao remover dados: " . $cxn->error;
    }


    $cxn->close();
}
?>
