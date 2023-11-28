<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar ao banco de dados MySQL
    include ("cnx.php");
    if ($cxn->connect_error) {
        die("Falha na conexão: " . $cxn->connect_error);
    }

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $saladeprova = $_POST['saladeprova'];

    $selecionar=mysqli_query($cxn, "select * from saladeprova where idsala='$saladeprova'");
    while ($montar=mysqli_fetch_array($selecionar))
    {
        $quantfiscais = $montar['quantfiscais'];
    }
    echo "$quantfiscais";
    if($quantfiscais < 3 )
    {      
        $sql = "INSERT INTO fiscal (nomefiscal, salaprova, cpf) VALUES ('$nome', '$saladeprova', '$cpf')";
        if ($cxn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso";
        } else {
            echo "Erro ao inserir dados: " . $cxn->error;
        }
        $quantfiscais++;
        mysqli_query($cxn,"update saladeprova SET quantfiscais= '$quantfiscais' WHERE idsala= '$saladeprova' ");
        
    }
    // Fechar a conexão
    $cxn->close();
}
?>
