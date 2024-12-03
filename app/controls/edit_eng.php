<?php

include('config.php');

//Busca os dados do usuário para edição
try{
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM engenheiros WHERE id_eng = '$id'";
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

$name = $row['nome'];
$login = $row['reg_CREA'];
$email = $row['email'];
$phone = $row['phone'];


?>