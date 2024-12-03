<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


include("config.php");
$sql = "SELECT * FROM mensagens where id_msg = $id";
$resultado = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado);
?>

    <table class="table1">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Data</th>
       </tr>
       <tr>
       <td><?php echo $row['nome']; ?></td>
       <td><?php echo $row['email']; ?></td>
       <td><?php echo $row['telefone']; ?></td>
       <td><?php echo $row['date']; ?></td>

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
    $stmt = $conn->prepare("UPDATE mensagens SET status = '2' WHERE id_msg = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
    ?>