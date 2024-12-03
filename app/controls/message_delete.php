<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
include "config.php";

    $stmt = $conn->prepare("DELETE FROM mensagens WHERE id_msg = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Mensagem deletada com sucesso!')</script>";
        header("Location: ../views/message");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
    ?>