<?php

$todos = isset($_POST['listar']) ? $_POST['listar'] : '';
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$limit = 10;
$offset = ($limit * $page) - $limit;

$sql5 = "SELECT * FROM mensagens_clientes";
$resultado5 = mysqli_query($conn, $sql5);
$total_linhas = mysqli_num_rows($resultado5);
$sql = "SELECT id_msg, usuarios.nome, title, mensagem, date, status FROM mensagens_clientes JOIN usuarios ON usuarios.id_user = mensagens_clientes.id_user ORDER BY date DESC LIMIT $limit OFFSET $offset";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);
?>

<div class="tabela">
    <table>
        <tr>
            <th>Destinatário</th>
            <th>Título</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($res)) : ?>
            <tr>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <?php $date = new DateTime($row['date']) ?>
                <td><?php echo $date->format('d/m/Y'); ?></td>

                <td>
                    <?php if ($row['status'] == 1) : ?>
                        <span class="badge bg-success">Não lida</span>
                    <?php elseif($row['status'] == 2) : ?>
                        <span class="badge bg-danger">Mensagem lida</span>
                    <?php elseif($row['status'] == 3) : ?>
                        <span class="badge bg-danger">Mensagem deletada</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="../views/message_read_sended?id=<?php echo $row['id_msg'] ?>"><span title="Ler"><button>Abrir</span></button></a>
                    <a onclick="return confirm('Deseja realmente excluir a mensagem?')" href="../controls/message_delete?id=<?php echo $row['id_msg'] ?>"><button>Deletar</button></a>
                </td>

            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <div class="btt">
        <td> <?php echo "$registros"; ?> mensagens nesta página de um total de <?php echo "$total_linhas"; ?> mensagens.</td><br>
    </div>

</div>

<?php
$pages = ceil($total_linhas / $limit);
$MaxLinks = 2;

?>
<!-- Paginação -->
<div class="pages" style="text-align: center;  font-size: large;">
    <br>
    Páginas: <br> <a href="?page=1">
        << </a>

            <?php for ($i = $page - $MaxLinks; $i <= $page - 1; $i++) : ?>
                <?php if ($i > 0) : ?>
                    <a href="?page=<?php echo $i; ?>" onclick=""><?php echo $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php echo $page; ?>

            <?php for ($i2 = $page + 1; $i2 <= $page + $MaxLinks; $i2++) : ?>
                <?php if ($i2 <= $pages) : ?>
                    <a href="?page=<?php echo $i2; ?>"><?php echo $i2; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <a href="?page=<?php echo $pages; ?>"> >></a>

</div>