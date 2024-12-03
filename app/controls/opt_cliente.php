<?php

$sql = "SELECT * FROM engenheiros WHERE ativo = '1' ORDER BY nome ASC";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);

$row = mysqli_fetch_all($res, MYSQLI_ASSOC);


$sql1 = "SELECT * FROM usuarios WHERE perfil = '2'AND ativo = '1' ORDER BY nome ASC";
$res1 = mysqli_query($conn, $sql1);
$registros1 = mysqli_num_rows($res1);

$row1 = mysqli_fetch_all($res1, MYSQLI_ASSOC);

?>