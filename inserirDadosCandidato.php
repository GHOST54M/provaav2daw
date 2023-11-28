<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include ("cnx.php");
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $saladeprova = $_POST['saladeprova'];
    
    $selecionar=mysqli_query($cxn, "select * from saladeprova where idsala='$saladeprova'");
    while ($montar=mysqli_fetch_array($selecionar))
    {
        $quantcandidatos = $montar['quantcandidatos'];
    }
    echo "$quantcandidatos";
    if($quantcandidatos < 50 )
    {
        $sql = "INSERT INTO candidato (nome, cpf, email, salaprova) VALUES ('$nome', '$cpf', '$email', '$saladeprova')";
        if ($cxn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso";
        } else {
            echo "Erro ao inserir dados: " . $cxn->error;
        }
        $quantcandidatos++;
        mysqli_query($cxn,"update saladeprova SET quantcandidatos= '$quantcandidatos' WHERE idsala= '$saladeprova' ");
        
    }
    $cxn->close();
}
?>
