<?php
session_start();
include('config.php');

$nome = $_SESSION['nome'];
$title = $_POST['assunto'];
$message = $_POST['texto'];
$status = '1';      //Status 1 = Não lido / 2 = Lido
$agora = new DateTime('now');
$data = $agora->format('Y-m-d H:i:s');

$sql = "SELECT id_user FROM usuarios where perfil = '2'";
$result = $conn->query($sql);




while ($row = $result->fetch_assoc()) :

    $stmt = $conn->prepare("INSERT INTO mensagens_clientes (nome, title, mensagem, status, id_user, date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nome, $title, $message, $status, $row['id_user'], $data);

    if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
    header("location: ../views/message_sended");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
endwhile;

$stmt->close();
$conn->close();
