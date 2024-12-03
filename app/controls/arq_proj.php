<?php

include("../controls/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$arq = '0';


$stmt = $conn->prepare("UPDATE projetos SET arquivo = ? WHERE id_proj = ?");
$stmt->bind_param("ii", $arq, $id);

if ($stmt->execute()) {
    echo "<script>alert('Projeto arquivado com sucesso!')</script>";
    header("Location: ../views/project");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$stmt->close();
$conn->close();


?>