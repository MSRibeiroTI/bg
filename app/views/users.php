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
    <link rel="stylesheet" href="../assets/css/user.css" />
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Barbosa e Gomes Engenharia</title>
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>
    </header>

    <main>
        <section class="title-container">
            <div class="title">
                <h1>Usuários</h1>
            </div>
            <div class="search-container">
                <form action="" method="post">
                    <input type="text" name="busca" class="search-input" placeholder="Buscar por Nome" value="" />
                    <button type="submit" class="search-button">Pesquisar</button>
                    <span class="search-icon">
                        <img src="../assets/img/loupe-icon.svg" alt="" />
                    </span>

                </form>
            </div>
        </section>
        <section>
            <?php
            $busca = $_POST['busca'] ?? '';
            if ($busca != '') {
                include("../controls/user_search.php");
            } else {

                include_once('../controls/user_list.php');
            } ?>
        </section>
        <div class="btt">
            <br>
            <a href="./home"><button class="btt">Voltar</button></a>
            <a href="./cad_user"><button class="btt"> Cadastrar</button></a>
            <a href="./users_old"><button class="btt">Arquivados</button></a>
        </div>
        <?php
        mysqli_close($conn);
        ?>
    </main>
</body>
<?php include_once('../controls/footer.php') ?>

</html>