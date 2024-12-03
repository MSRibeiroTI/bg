<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT id, id_proj, description, nome_imagem, tamanho_imagem, tipo_imagem, imagem_patch, mes, nome_evento FROM diary WHERE id_proj = $id ORDER BY mes";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
?>

        <table class="table1">
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Nome da Imagem</th>
                <th>Imagem</th>
                <th>Mês da Obra</th>
                <th>Opções</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td><?php echo $row['nome_evento']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['nome_imagem']; ?></td>
                    <td><a href="../uploads/<?php echo $row['imagem_patch']; ?>" target="_blank">Abrir Imagem</a></td>
                    <td><?php echo $row['mes']; ?>º Mês</td>
                    <td>
                        <a href="../views/edit_diary?id=<?php echo $row['id_proj']; ?>&id_proj=<?php echo $row['id']; ?>"><span title="Editar"><button>Editar</span></button></a>
                        <a onclick="return confirm('Deseja realmente excluir?')" href="../controls/m?id=<?php echo $row['id']; ?>"><button>Deletar</button></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br><br>
<?php
    } else {
        echo "Nenhum resultado encontrado.";
    }
} else {
    echo "ID não fornecido.";
}
?>