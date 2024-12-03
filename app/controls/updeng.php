<?php

include('config.php');

$id = $_GET['id'];

$nome = $_POST['name'];
$crea = $_POST['reg'];
$email = $_POST['email'];
$phone = $_POST['tel'];



// Update o usuário
$stmt = $conn->prepare("UPDATE engenheiros SET nome = ?, reg_CREA = ?, email = ?, phone = ? WHERE id_eng = '$id';");
$stmt->bind_param("ssss", $nome, $crea, $email, $phone);


try {
    if ($stmt->execute()) {
        echo "<script>window.alert('Engenheiro atualizado com sucesso!')</script>;";
        echo "<script>window.location.replace('../views/engenheiros')</script>";
    } else {
        throw new Exception("Error: " . $sql . "<br>" . $conn->error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


$stmt->close();
$conn->close();
