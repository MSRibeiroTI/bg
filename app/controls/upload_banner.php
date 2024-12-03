<?php
require("./config.php");



$nome_imagem = $_FILES['imagem']['name'];
$extensao = strtolower(pathinfo($nome_imagem, PATHINFO_EXTENSION));
$novo_nome = md5(uniqid(time())). ".". $extensao;
$destino = "../upload_web/". $novo_nome;
$nome = $_POST['title'];
$tema = $_POST['thema'];
$descricao = $_POST['description'];
$status = $_POST['status'];

if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
    $stmt = $conn->prepare("INSERT INTO site (title, theme, description, imagem_patch, status) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $nome, $tema, $descricao, $novo_nome, $status);
    
    try {
        if ($stmt->execute()) {
            header("location:../views/add_site");
    
        } else {
            throw new Exception("Error: ". $sql. "<br>". $conn->error);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }


    $stmt->close();
    $conn->close();
}



?>

