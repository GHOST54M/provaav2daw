<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include("cnx.php");
    if ($cxn->connect_error) {
        die("Falha na conexão: " . $cxn->connect_error);
    }
    $id = $_POST['id'];
    $novoSala = $_POST['novoSala'];

    $sql = "UPDATE candidato SET salaprova='$novoSala' WHERE idcandidato=$id";
    if ($cxn->query($sql) === TRUE) {
        echo "Dados do usuário atualizados com sucesso";
    } else {
        echo "Erro ao atualizar dados do usuário: " . $cxn->error;
    }
    $cxn->close();
}
?>
