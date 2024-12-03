<?php
include('config.php');

$nome = strtoupper($_POST['nome']);
$email = strtolower($_POST['email']);
$phone = $_POST['telefone'];
$message = $_POST['text'];
$status = '1';      //Status 1 = Não lido / 2 = Lido
$agora = new DateTime('now');
$data = $agora->format('Y-m-d H:i:s');

$stmt = $conn->prepare("INSERT INTO mensagens (nome, email, telefone, mensagem, status, date) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nome, $email, $phone, $message, $status, $data);

if ($stmt->execute()) {
     header("location: /bg/index#contato");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
