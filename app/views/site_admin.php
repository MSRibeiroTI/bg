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
        <div>
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>

    </header>

    <main>
        <section class="title">

            <h1 id="h1">Painel de Banner's do Site</h1>

        </section>

        <section class="grid">

<?php include_once('../controls/load_site.php'); ?>
 
        </section>
        <div class="btt">
            <br>
            <a href="./home"><button class="btt">Voltar</button></a>
            <a href="./add_site"><button class="btt"> Cadastrar</button></a>
        </div>
    </main>
</body>

<?php include_once('../controls/footer.php'); ?>
</html>