<?php
include_once('./config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$name = $_POST['name'];
$description = $_POST['text'];
$inicio = $_POST['inicio'];
$id_eng = $_POST['engType'];
$id_address = $_POST['id_address'];
$cep = $_POST['cep'];
$logradouro = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$sigla = $_POST['uf'];

try {
    $stmt = $conn->prepare("UPDATE address SET cep = ?, logradouro = ?, numero = ?, bairro = ?, cidade = ?, sigla_estado = ? WHERE id_address = $id_address");
    $stmt->bind_param('ssssss', $cep, $logradouro, $numero, $bairro, $cidade, $sigla);


    if ($stmt->execute()) {
        echo "<script>alert('Endereço alterado com sucesso!');</script>";
    } else {
        throw new Exception("Error: " . $sql . "<br>" . $conn->error);
    }

    $stmt = $conn->prepare("UPDATE projetos SET name = ?, desciption = ?, inicio = ?, id_eng = ?, id_address = ? WHERE id_proj = $id");
    $stmt->bind_param('sssii', $name, $description, $inicio, $id_eng, $id_address);

    if ($stmt->execute()) {
        echo "<script>alert('Projeto alterado com sucesso!');</script>";
        header("location:../views/project");
    } else {
        throw new Exception("Error: " . $sql . "<br>" . $conn->error);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
