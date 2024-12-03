<?php
include_once ('config.php');
if (isset($_SESSION["id_user"])) {
    $id = $_SESSION["id_user"];
}

$sql = "SELECT count(nome) as total FROM mensagens_clientes where status = '1' and id_user = $id";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);

echo $row['total'];

?>



