<?php
include_once('../controls/include.php');
include_once('../controls/edit_project_values.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="../assets/img/logo-icon-tab.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/vars.css" />
    <link rel="stylesheet" href="../assets/css/cad_projetos.css" />
    <title>Barbosa e Gomes Engenharia</title>
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>
    </header>

    <main>
        <section class="title">
            <h1>Editar Projeto</h1>
        </section>

        <section class="form">
            <div class="form-register">
                <form action="../controls/upd_project.php?id=<?php echo $id; ?>" method="post">
                    <label for="name">Nome do Projeto</label>
                    <input type="text" name="name" id="name" value="<?php echo $name; ?>" required />

                    <label for="inicio">Data de Início</label>
                    <input type="date" name="inicio" id="inicio" value="<?php echo $inicio; ?>" required />

                    <label for="user">Cliente</label>
                    <div class="select-wrapper">
                        <label for="userType" style="background-color:darkgrey; color:dimgrey; border-radius: 20px; width: 1000px; height: 40px; padding: 1%;"><?php echo $user; ?></label>


                    </div>
                    <?php include('../controls/opt_cliente.php') ?>
                    <label for="email">Engenheiro</label>
                    <div class="select-wrapper">
                        <label for="engType"></label>
                        <select id="engType" name="engType">
                            <option value="<?php echo $id_eng; ?>"><?php echo $eng; ?></option>
                            <?php foreach ($row  as $options2) { ?>

                                <option value="<?php echo $options2['id_eng'] ?>"><?php echo $options2['nome']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div id="form-addr">
                        <label for="address">Endereço</label>
                        <input type="hidden" name="id_address" id="id_address" value="<?php echo $id_address; ?>" readonly />
                        <input name="cep" type="text" id="cep" value="<?php echo $cep; ?>" size="10" maxlength="9" placeholder="CEP" /><br>
                        <input name="rua" type="text" id="rua" size="60" value="<?php echo $logradouro; ?>" placeholder="Rua" />
                        <input name="numero" type="text" id="numero" size="5" value="<?php echo $numero; ?>" placeholder="Nº" />
                        <input name="bairro" type="text" id="bairro" size="40" value="<?php echo $bairro; ?>" placeholder="Bairro" />
                        <input name="cidade" type="text" id="cidade" size="40" value="<?php echo $cidade; ?>" placeholder="Cidade" />
                        <input name="uf" type="text" id="uf" size="2" value="<?php echo $sigla; ?>" placeholder="Estado" />
                    </div>
                    <label for="text">Descrição do Projeto</label>
                    <textarea name="text" id="text"><?php echo $description; ?></textarea> <br>

                    <button type="submit" id="submit-button">Salvar</button>

                </form>

            </div>

        </section>
    </main>
    <div id="btt">
        <a href="./project"><button>Voltar</button></a>
    </div>
</body>

</html>