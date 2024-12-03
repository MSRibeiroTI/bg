<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];



    $sql = "SELECT id_proj, name, desciption, inicio, usuarios.nome as user, engenheiros.id_eng, engenheiros.nome as eng, projetos.id_address, cep, logradouro, numero, bairro, cidade, sigla_estado FROM projetos JOIN usuarios on usuarios.id_user = projetos.id_user
JOIN engenheiros on engenheiros.id_eng = projetos.id_eng JOIN address on address.id_address = projetos.id_address WHERE id_proj = $id";
    $resultado = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultado);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $name = $row['name'];
        $description = $row['desciption'];
        $inicio = $row['inicio'];
        $user = $row['user'];
        $eng = $row['eng'];
        $id_eng = $row['id_eng'];
        $id_address = $row['id_address'];
        $cep = $row['cep'];
        $logradouro = $row['logradouro'];
        $numero = $row['numero'];
        $bairro = $row['bairro'];
        $cidade = $row['cidade'];
        $sigla = $row['sigla_estado'];
    } else {
        echo "Nenhum resultado encontrado.";
    }
} else {
    echo "ID ou id_proj não fornecido.";
}
