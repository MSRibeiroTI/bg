<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT projetos.id_proj, projetos.inicio, projetos.data, projetos.name, projetos.arquivo, usuarios.telefone, usuarios.email, usuarios.nome as cliente, engenheiros.nome as eng, projetos.desciption, engenheiros.phone, engenheiros.reg_CREA, engenheiros.email as email_eng, address.logradouro, address.bairro, address.cidade, address.sigla_estado, address.numero, address.cep from projetos join usuarios on usuarios.id_user = projetos.id_user JOIN engenheiros on engenheiros.id_eng = projetos.id_eng JOIN address on address.id_address = projetos.id_address WHERE projetos.id_proj = $id";
    $resultado = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultado);

    if ($row) {
        $inicio = new DateTime($row['inicio']);
        $data = new DateTime($row['data']);
?>

        <table class="table1">
            <tr>
                <th>Projeto - Status: <?php if ($row['arquivo'] == 0) {
                                            echo "Concluído";
                                        } else {
                                            echo "Em andamento";
                                        } ?></th>
                <th>Cliente</th>
                <th>Engenheiro</th>
            </tr>
            <tr>
                <td>
                    <br><strong>Nome: </strong><?php echo $row['name']; ?> <br> <strong>Data de Início: </strong><?php echo $inicio->format('d/m/Y'); ?> <br> <strong> Data de Cadastro: </strong><?php echo $data->format('d/m/Y H:m:s'); ?>
                    <br><br> <strong>Endereço: </strong><br><?php echo $row['logradouro']; ?>, <?php echo $row['numero']; ?>, <br><?php echo $row['bairro']; ?>, <?php echo $row['cidade']; ?> - <?php echo $row['sigla_estado'] ?> / CEP: <?php echo $row['cep']; ?>
                </td>
                <td><br><?php echo $row['cliente']; ?> <br> <strong>E-mail: </strong><?php echo $row['email']; ?> <br> <strong>Telefone: </strong><?php echo $row['telefone']; ?></td>
                <td><br> <?php echo $row['eng']; ?> <br><strong> CREA: </strong><?php echo $row['reg_CREA']; ?> <br> <strong>E-mail: </strong><?php echo $row['email_eng']; ?> <br> <strong>Telefone: </strong><?php echo $row['phone']; ?></td>
            </tr>
        </table>

        <table class="table2">
            <tr>
                <th>Descrição</th>
            </tr>
            <tr>
                <td><?php echo $row['desciption'] ?></td>
            </tr>
        </table>
        <br><br>

<?php
    } else {
        echo "Projeto não encontrado.";
    }
} else {
    echo "ID não fornecido.";
}

//$conn->close();
?>