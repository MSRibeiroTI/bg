<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

include('config.php');

$ativo = '1';
   // Desativa usuário
    $stmt = $conn->prepare("UPDATE `consultoria`.`engenheiros` SET `ativo` = ? WHERE id_eng = ?");
    $stmt->bind_param("ii", $ativo, $id);

    try {
        if ($stmt->execute()) {
            header("location:../views/engenheiros");
        } else {
            throw new Exception("Error: ". $sql. "<br>". $conn->error);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }


$stmt->close();
$conn->close();

?>