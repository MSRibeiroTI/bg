<?php

include('config.php');

//Busca os dados do banner para edição
try{
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM site WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
  } else {
    echo "Nenhum ID encontrado";
  }
  $conn->close();
}
catch (Exception $e) {
    echo "Erro ao buscar dados do usuário para edição: " . $e->getMessage();
    }

$title = $row['title'];
$theme = $row['theme'];
$description = $row['description'];
$imagem_patch = $row['imagem_patch'];
$status = $row['status'];
$id = $row['id'];

?>