<?php
include_once('../controls/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
    $nome_evento = $_POST['nome_evento'];
    $description = $_POST['descricao_evento'];
    $mes = $_POST['mes'];
    $id2 = $_POST['id'];

    $stmt = $conn->prepare("UPDATE diary SET nome_evento = ?, description = ?, mes = ? WHERE id = ?");
    $stmt->bind_param("sssi", $nome_evento, $description, $mes, $id2);

    if ($stmt->execute()) {
        header("Location: ../views/project_open?id=$id");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    $conn->close();
    
?>