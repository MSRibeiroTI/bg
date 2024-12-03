<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='../loginPage';</script>";
} elseif (($_SESSION["perfil"]) == '1') {
    print "<script>location.href='./loginPage';</script>";
}

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

    <main>
        <section class="title">
            <h1>Bem-vindo!</h1>

        </section>
        <section class="subtitle">
            <h3>Aqui você acompanha a realização do seu sonho! </h3>
        </section>
        <div class="painel">
            <section class="grid">

                <div class="grid-item">
                    <a href="./client_project">
                        <img src="../assets/img/project-icon.svg" alt="Ícone de um blueprint" onerror="this.style.display = 'none'" />

                        Meus projetos
                    </a>
                </div>
                <div class="grid-item">
                    <a href="./message_client">
                        <img src="../assets/img/message-icon.svg" alt="Ícone de um envelope" onerror="this.style.display = 'none'" /> <strong><?php include_once('../controls/count_message_client.php'); ?></strong>

                        Mensagens
                    </a>
                </div>
            </section>
        </div>
    </main>

</body>

<?php include_once('../controls/footer.php'); ?>

</html>