<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id2 = $_GET['id_proj'];


$sql = "SELECT id, id_proj, description, nome_imagem, tamanho_imagem, tipo_imagem, imagem_patch, mes,
nome_evento FROM diary WHERE id_proj = $id and id = $id2 ORDER BY mes";
$resultado = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado);

if ($resultado && mysqli_num_rows($resultado) > 0) {
$nome_evento = $row['nome_evento'];
$description = $row['description'];
$nome_imagem = $row['nome_imagem'];
$imagem_patch = $row['imagem_patch'];
$mes = $row['mes'];
$id2 = $row['id'];

    } else {
        echo "Nenhum resultado encontrado.";
    }
} else {
    echo "ID ou id_proj não fornecido.";
}

?>
