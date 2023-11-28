<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include ("cnx.php");
    if ($cxn->connect_error) {
        die("Falha na conexão: " . $cxn->connect_error);
    }
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $saladeprova = $_POST['saladeprova'];  
        $sql = "INSERT INTO candidato (nome, cpf, email, salaprova) VALUES ('$nome', '$cpf', '$email', '$saladeprova')";
        if ($cxn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso";
        } else {
            echo "Erro ao inserir dados: " . $cxn->error;
        }


    $cxn->close();
}
?>
