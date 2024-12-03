<?php
$sql = "SELECT * FROM site;";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);

?>
<div class="page">
    <br>
    <?php while ($row = mysqli_fetch_assoc($res)) : ?>

        <div class="edit">
            <div class="imagem">
                <img src="../upload_web/<?php echo $row['imagem_patch']; ?>" style="width: 70% ;" alt=" Imagem">
            </div>
            <div class="texto">
                <p><?php echo $row['title']; ?>
                <p><strong><?php echo $row['theme']; ?></strong><br>
                    <?php echo $row['description']; ?><br>
                    <?php
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
                    } ?><br>
                    <a href="edit_site?id=<?php echo $row['id'] ?>"><span title="Editar"><button>Editar</span></button></a>
                
            </div>
        </div>

    <?php endwhile; ?>
    </table>
</div>