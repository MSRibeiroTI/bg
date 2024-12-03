<?php
$sql = "SELECT * FROM site order by status desc;";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);

?>
<br>
<table>
    <tr>
        <th>Título</th>
        <th>Tema</th>
        <th>Descrição</th>
        <th>imagem</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($res)) : ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['theme']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><a href="../upload_web/<?php echo $row['imagem_patch']; ?>" target="_blank">Abrir Imagem</a></td>
            <td><?php
                if ($row['status'] == 1) {
                    echo "Serviço 1";
                } else if ($row['status'] == 2) {
                    echo "Serviço 2";
                } else if ($row['status'] == 3) {
                    echo "Serviço 3";
                } else if ($row['status'] == 4) {
                    echo "Projeto 1";
                } else if ($row['status'] == 5) {
                    echo "Projeto 2";
                } else if ($row['status'] == 6) {
                    echo "Projeto 3";
                } else {
                    echo "<p style='color: red;'>Inativo</p>";
                } ?></td>
            <td>
                <a href="edit_site?id=<?php echo $row['id'] ?>"><span title="Editar"><button>Editar</span></button></a>
                <a onclick="return confirm('Deseja realmente excluir esse banner?')" href="2?id=<?php echo $row['id'] ?>"><button>Deletar</button></a>
            </td>

        </tr>
    <?php endwhile; ?>
</table>