<?php

if (isset($_GET['mes'])) {
    $mes = $_GET['mes'];
}

include('config.php');

$id = $_SESSION["id_proj"];

$sql = "SELECT mes, diary.id_proj, diary.description, diary.nome_evento, diary.imagem_patch, projetos.id_user FROM diary
JOIN projetos ON diary.id_proj = projetos.id_proj WHERE diary.mes = $mes and diary.id_proj = $id";
$result = $conn->query($sql);
$registros = mysqli_num_rows($result);

?>
<section class="title">
    <h1><?php echo $mes ?>° MÊS</h1>
</section>
<?php
if ($registros > 0) {
?>
    <div class="container">
        <?php
        while ($row = mysqli_fetch_array($result)) :
        ?>


            <div class="gallery-wrapper">
                <div class="gallery">
                    <div>
                        <label for=""><?php echo $row['nome_evento']; ?></label>
                    </div>
                    <div>
                        <img src="../uploads/<?php echo $row['imagem_patch']; ?>" alt="" class="item current-item" />
                    </div>
                    <div class="description">
                        <?php echo $row['description']; ?>
                    </div>
                </div>
            </div>

    <?php
        endwhile;
    }


    ?>
    </div>
    <button class="arrow-left control" aria-label="Previous image">
        ◀
    </button>
    <button class="arrow-right control" aria-label="Next Image">▶</button>