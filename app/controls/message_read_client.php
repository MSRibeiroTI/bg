<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

include('config.php');

$sql = "SELECT * FROM mensagens_clientes where id_msg = $id and id_user = $_SESSION[id_user]";
$resultado = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado);

if ($row['id_user'] != $_SESSION["id_user"]) {
    print "<script>location.href='..//views/message_opened_client';</script>";
}else{
    $stmt = $conn->prepare("UPDATE mensagens_clientes SET status = '2' WHERE id_msg = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<table class="table1">
    <tr>
        <th>Remetente</th>
        <th>Assunto</th>
        <th>Data</th>
    </tr>
    <tr>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <?php $date = new DateTime($row['date']) ?>
        <td><?php echo $date->format('d/m/Y H:m:s'); ?></td>
 
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


$stmt->close();
$conn->close();
?>