<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
include "config.php";

$delete = '3';
$stmt = $conn->prepare("UPDATE mensagens_clientes SET status = ? WHERE id_msg = ?");
$stmt->bind_param("ss", $delete, $id);


    if ($stmt->execute()) {
        echo "<script>alert('Mensagem deletada com sucesso!')</script>";
        header("Location: ../views/message_client");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
    ?>