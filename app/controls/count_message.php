<?php
include_once ('config.php');

$sql = "SELECT count(nome) as total FROM mensagens where status = '1'";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);

echo $row['total'];

?>



