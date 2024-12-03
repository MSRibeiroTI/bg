<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (empty($_SESSION)) {
    print "<script>location.href='../loginPage';</script>";
} elseif (($_SESSION["perfil"]) == '1') {
    print "<script>location.href='./loginPage';</script>";
}
include('../controls/config.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="../assets/img/logo-icon-tab.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/message.css" />
    <link rel="stylesheet" href="../assets/css/vars.css" />
    <link rel="stylesheet" href="../assets/css/menu.css">
    <title>Mensagens</title>

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
            <h1>Novas Mensagens</h1> <br>


        </section>

        <?php
        $busca = $_POST['busca1'] ?? '';
        $data = $_POST['data'] ?? '';
        if ($busca == '' && $data == '') {
            include "../controls/view_message_client.php";
        }


        ?>

        <?php
        mysqli_close($conn);
        ?>
        <div class="btt">
            <br>
            <a href="./clientPage"><button class="btt">Voltar</button></a>
            <a href="./message_opened_client"><button class="btt"> Msg. Lidas</button></a>
        </div>

</body>

</html>