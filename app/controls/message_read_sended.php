<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

include("config.php");

$sql = "SELECT id_msg, usuarios.nome, title, mensagem, date, status FROM mensagens_clientes JOIN usuarios ON usuarios.id_user = mensagens_clientes.id_user where id_msg = $id";
$resultado = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado);
?>

<table class="table1">
    <tr>
        <th>Cliente</th>
        <th>Título</th>
        <th>Data</th>
    </tr>
    <tr>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <?php $date = new DateTime($row['date']) ?>
        <td><?php echo $date->format('d/m/Y'); ?></td>

</table>
<br>
<table class="table2">
    <tr>
        <th>Mensagem</th>
    </tr>
    <tr>
        <td><?php echo $row['mensagem'] ?></td>
    </tr>
</table>
<br><br>

<?php

$conn->close();
?>