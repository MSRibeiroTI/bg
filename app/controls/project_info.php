<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


$sql = "SELECT projetos.id_proj, projetos.inicio, projetos.name, usuarios.nome as cliente, engenheiros.nome as eng from projetos join usuarios on usuarios.id_user = projetos.id_user
JOIN engenheiros on engenheiros.id_eng = projetos.id_eng WHERE id_proj = $id";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res)
?>

<div class="info">
    <Label>Nome do Projeto: </Label><?php echo $row['name']; ?> <br>
    <label for="">Cliente: </label><?php echo $row['cliente']; ?> <br>
    <label for="">Engenheiro Responável: </label><?php echo $row['eng']; ?><br>
    <label for="">Data de Início: </label><?php echo $row['inicio']; ?><br>

</div>