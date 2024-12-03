<?php
if (isset($_SESSION['id_user'])) {
    $id = $_SESSION['id_user'];
}


$sql = "SELECT projetos.id_proj, projetos.inicio, projetos.name, projetos.arquivo, usuarios.nome as cliente, engenheiros.nome 
as eng, projetos.desciption, engenheiros.phone, engenheiros.email, address.logradouro, address.bairro, address.cidade, address.sigla_estado,
address.numero, address.cep from projetos join usuarios on usuarios.id_user = projetos.id_user
JOIN engenheiros on engenheiros.id_eng = projetos.id_eng JOIN address on address.id_address = projetos.id_address WHERE projetos.id_user = $id";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);

if ($registros > 0) {
    while ($row = mysqli_fetch_assoc($res)) :
?>

        <div class="info">
            <div class="proinfo">
                <br>
                <Label><strong>Nome do Projeto:</strong> </Label><?php echo $row['name']; ?> <br>
                <label for=""><strong>Cliente: </strong></label><?php echo $row['cliente']; ?> <br>
                <label for=""><strong>Endereço: </strong></label><?php echo $row['logradouro']; ?>, <?php echo $row['numero']; ?>, <?php echo $row['bairro']; ?>, <?php echo $row['cidade']; ?> - <?php echo $row['sigla_estado'] ?> / CEP: <?php echo $row['cep']; ?> <br>
                <label for=""><strong>Engenheiro Responável:</strong> </label><?php echo $row['eng']; ?><br>
                <label for=""><strong>Fone:</strong> </label><?php echo $row['phone']; ?><br>
                <label for=""><strong>Email:</strong> </label><?php echo $row['email']; ?><br>
                <?php $date = new DateTime($row['inicio']) ?>
                <label for=""><strong>Data de Início: </strong></label><?php echo $date->format('d/m/Y'); ?><br>
                <label for=""><strong>Status: </strong></label><?php if ($row['arquivo'] == 0) {
                                                                    echo "Concluído";
                                                                } else {
                                                                    echo "Em andamento";
                                                                } ?> <br><br>
                <label for=""><strong>Descrição: </strong></label><?php echo $row['desciption']; ?><br> <br>

            </div>

            <br>
            <div class="grid-item2">
                <a href="./user_diary?id=<?php echo $row['id_proj']; ?>">
                    <img src="../assets/img/diary-icon.svg" alt="Ícone de um diário" onerror="this.style.display = 'none'" />

                    Diário de Obra
                </a>
            </div>
            <br><br>
            <hr>
        </div>
<?php
    endwhile;
}
?>