<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='../loginPage';</script>";
} elseif (($_SESSION["perfil"]) == '1') {
    print "<script>location.href='./loginPage';</script>";
}
include('../controls/config.php');
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
    <link rel="stylesheet" href="../assets/css/client.css" />
    <link rel="stylesheet" href="../assets/css/menu.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Barbosa e Gomes Engenharia</title>
</head>

<body>
    <header>
        <div class="logo-icon">
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>
        <?php include_once('./menu_user.php'); ?>


    </header>
    <section class="title">
            <h1>Meus Projetos:</h1>
              
        </section>
    <main>
        <div class="infop">
            <?php include_once('../controls/client_project_info.php');   ?>

        </div>

        <div class="back">
            <a href="./clientPage">
                <img src="../assets/img/back-icon.svg" alt="Ícone de voltar" />
            </a>
        </div>
    </main>

    <script src="../assets/js/sidebar.js"></script>

</body>



</html>