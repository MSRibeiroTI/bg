<?php
include('../controls/config.php');



$nome_imagem = $_FILES['imagem']['name'];
$extensao = strtolower(pathinfo($nome_imagem, PATHINFO_EXTENSION));
$novo_nome = md5(uniqid(time())). ".". $extensao;
$destino = "../uploads/". $novo_nome;
$nomeEvento = $_POST['nome_evento'];
$descricaoEvento = $_POST['descricao_evento'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];
$id = $_GET['id'];
$mes = $_POST['mes'];

if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
    $stmt = $conn->prepare("INSERT INTO diary (id_proj, nome_evento, description, nome_imagem, tamanho_imagem, tipo_imagem, imagem_patch, mes) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $id, $nomeEvento, $descricaoEvento, $nome, $tamanho, $tipo, $novo_nome, $mes);
    
    try {
        if ($stmt->execute()) {
            header("location:../views/project_open?id=$id");
            $stmt->close();
        } else {
            throw new Exception("Error: ". $sql. "<br>". $conn->error);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}



$conn->close();
?>

