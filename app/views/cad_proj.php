<?php
include_once('../controls/include.php')

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
    <script src="../assets/js/cep.js"></script>
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
            <h1>Cadastrar Novo Projeto</h1>
        </section>

        <section class="form">
            <div class="form-register">
                <form action="../controls/save_project.php" method="post">
                    <label for="name">Nome do Projeto</label>
                    <input type="text" name="name" id="name" placeholder="Nome do Projeto" required />
                    <label for="inicio">Data de Início</label>
                    <input type="date" name="inicio" id="inicio" required />

                    <label for="user">Cliente</label>
                    <div class="select-wrapper">
                        <label for="userType"></label>
                        <?php include('../controls/opt_cliente.php')?>
                        <select id="userType" name="userType">
                            <?php foreach($row1  as $options) { ?>

                            <option value="<?php echo $options['id_user'] ?>"><?php echo $options['nome']; ?></option>

                            <?php } ?>
                        </select>
                    </div>

                    <label for="email">Engenheiro</label>
                    <div class="select-wrapper">
                        <label for="engType"></label>
                        <select id="engType" name="engType">
                        <?php foreach($row  as $options2) { ?>
                        <option value="<?php echo $options2['id_eng'] ?>"><?php echo $options2['nome']; ?></option>
                        <?php } ?>    
                    </select>
                    </div>
                    <div id="form-addr">
                        <label for="address">Endereço</label>
                        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" placeholder="CEP" /><br>
                        <input name="rua" type="text" id="rua" size="60" placeholder="Rua" />
                        <input name="numero" type="text" id="numero" size="5" placeholder="Nº" />
                        <input name="bairro" type="text" id="bairro" size="40" placeholder="Bairro" />
                        <input name="cidade" type="text" id="cidade" size="40" placeholder="Cidade" />
                        <input name="uf" type="text" id="uf" size="2" placeholder="Estado" />
                    </div>
                    <label for="text">Descrição do Projeto</label>
                    <textarea name="text" id="text"></textarea> <br>

                    <button type="submit" id="submit-button">Cadastrar</button>

                </form>

            </div>

        </section>
    </main>
    <div id="btt">
        <a href="./project"><button>Voltar</button></a>
    </div>
</body>

</html>