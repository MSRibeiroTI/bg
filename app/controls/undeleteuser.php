<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];


include('config.php');

$ativo = '1';
   // Deleta usuário
    $stmt = $conn->prepare("UPDATE `consultoria`.`usuarios` SET `ativo` = ? WHERE `id_user` = ?");
    $stmt->bind_param("ii", $ativo, $id);

    try {
        if ($stmt->execute()) {
            header("location:../views/users");
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