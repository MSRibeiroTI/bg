<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$senha = md5(md5($_POST['password']));

include('config.php');

   // Altera a senha

    $stmt = $conn->prepare("UPDATE usuarios SET senha = ? WHERE id_user = '$id';");
    $stmt->bind_param("s", $senha);

    try {
        if ($stmt->execute()) {
            echo "<script>alert('Senha alterada com sucesso!');</script>";
            header("location:../views/users");
        } else {
            throw new Exception("Error: ". $sql. "<br>". $conn->error);
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }


$stmt->close();
$conn->close();

?>