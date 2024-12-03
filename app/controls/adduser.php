<?php

include('./config.php');

$nome = strtoupper($_POST['name']);
$user =  strtoupper($_POST['user']);
$email = strtolower($_POST['email']);
$phone = $_POST['tel'];
$password = md5(md5($_POST['password']));
$perfil = $_POST['userType'];

// Verifica se já existe o usuário
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email =?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>window.alert('Usuário já cadastrado ou e-mail já cadastrado!')</script>;";
    echo "<script>window.location.replace('../views/cad_user')</script>";
} else {
    // Insere novo usuário
    $ativo = '1';
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, usuario, email, telefone, senha, perfil, ativo) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssi", $nome, $user, $email, $phone, $password, $perfil, $ativo);

    try {
        if ($stmt->execute()) {
            header("location:../views/users");
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