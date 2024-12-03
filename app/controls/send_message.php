<?php
session_start();
include('config.php');

$nome = $_SESSION['nome'];
$title = $_POST['assunto'];
$message = $_POST['texto'];
$status = '1';      //Status 1 = Não lido / 2 = Lido
$id_user = $_POST['userType'];
$agora = new DateTime('now');
$data = $agora->format('Y-m-d H:i:s');

$stmt = $conn->prepare("INSERT INTO mensagens_clientes (nome, title, mensagem, status, id_user, date) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nome, $title, $message, $status, $id_user, $data);

if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
     header("location: ../views/message_sended");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

?>
