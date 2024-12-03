<?php

include('config.php');

$nome = $_POST['name'];
$crea = $_POST['reg'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$ativo = '1';

// Verifica se já existe o usuário
$stmt = $conn->prepare("SELECT * FROM engenheiros WHERE nome =? AND email = ? AND reg_CREA = ?");
$stmt->bind_param("sss", $nome, $email, $crea);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>window.alert('Engenheiro já cadastrado!')</script>;";
    echo "<script>window.location.replace('../views/cad_eng')</script>";
} else {
    // Insere novo usuário
    $stmt = $conn->prepare("INSERT INTO engenheiros (nome, reg_CREA, email, phone, ativo) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $nome, $crea, $email, $phone, $ativo);

    try {
        if ($stmt->execute()) {
            header("location:../views/engenheiros");
        } else {
            throw new Exception("Error: ". $sql. "<br>". $conn->error);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$stmt->close();
$conn->close();

?>