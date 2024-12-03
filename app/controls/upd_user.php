<?php

include('config.php');

$id = $_GET['id'];

$nome = $_POST['name'];
$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['tel'];



// Update o usuário
$stmt = $conn->prepare("UPDATE usuarios SET nome = ?, usuario = ?, email = ?, telefone = ? WHERE id_user = '$id';");
$stmt->bind_param("ssss", $nome, $user, $email, $phone);


try {
    if ($stmt->execute()) {
        echo "<script>window.alert('Usuário atualizado com sucesso!')</script>;";
        echo "<script>window.location.replace('../views/users')</script>";
    } else {
        throw new Exception("Error: " . $sql . "<br>" . $conn->error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


$stmt->close();
$conn->close();
