<?php

$todos = isset($_POST['listar']) ? $_POST['listar'] : '';
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$limit = 10;
$offset = ($limit * $page) - $limit;

$sql5 = "SELECT * FROM engenheiros WHERE ativo = '1'";
$resultado5 = mysqli_query($conn, $sql5);
$total_linhas = mysqli_num_rows($resultado5);
$sql = "SELECT * FROM engenheiros WHERE ativo = '1' order by nome ASC LIMIT $limit OFFSET $offset";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);
?>

<div class="tabela">
    <table>
        <tr>
            <th>Nome</th>
            <th>Registro</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($res)) : ?>
            <tr>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['reg_CREA']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>

                <td>
                    <a href="../views/edit_eng?id=<?php echo $row['id_eng'] ?>"><span title="Editar"><button>Editar</span></button></a>
                    <a onclick="return confirm('Deseja realmente desativar esse engenheiro?')" href="../controls/delete_eng?id=<?php echo $row['id_eng'] ?>"><button>Desativar</button></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <div class="btt">
        <td> <?php echo "$registros"; ?> engenheiros nesta página de um total de <?php echo "$total_linhas"; ?> cadastrados.</td><br>
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