<?php
session_start();

include('../controls/config.php');

$name = $_POST['name'];
$userType = $_POST['userType'];
$engType = $_POST['engType'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$text = $_POST['text'];
$agora = new DateTime('now');
$data = $agora->format('Y-m-d H:i:s');
$inicio = $_POST['inicio'];
$arquivo = '1';

try {
    $stmt = $conn->prepare("INSERT INTO address (cep, logradouro, numero, bairro, cidade, sigla_estado) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $cep, $rua, $numero, $bairro, $cidade, $uf);

    if ($stmt->execute()) {
        echo "Endereço gravado com sucesso!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    $sql = "SELECT id_address FROM address WHERE cep = ? AND logradouro = ? AND numero = ? AND bairro = ? AND cidade = ? AND sigla_estado = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $cep, $rua, $numero, $bairro, $cidade, $uf);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id_address"];
        }
    } else {
        echo "0 results";
    }

    $stmt->close();

    $sql = "INSERT INTO projetos (name, desciption, id_user, id_eng, id_address, data, inicio, arquivo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $text, $userType, $engType, $id, $data, $inicio, $arquivo);
    if ($stmt->execute()) {
        echo "<script>location.href='../views/project';</script>";
    } else {    
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
