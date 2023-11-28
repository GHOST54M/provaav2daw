<?php
include ("cnx.php");

$sql = "SELECT * FROM saladeprova";
$resultado = $cxn->query($sql);

if ($resultado->num_rows > 0) {

    $data = array();
    while ($row = $resultado->fetch_assoc()) {
        $data[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo "Sem resultados";
}
$cxn->close();
?>
