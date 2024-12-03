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
                <h1>Usuários Arquivados</h1>
            </div>
        </section>
        <section>
            <?php
            $busca = $_POST['busca'] ?? '';
            if ($busca != '') {
                include("../controls/user_search.php");
            } else {

                include_once('../controls/user_list_old.php');
            } ?>
        </section>
        <div class="btt">
            <br>
            <a href="./users"><button class="btt">Voltar</button></a>
            
        </div>
        <?php
        mysqli_close($conn);
        ?>
    </main>
</body>
<?php include_once('../controls/footer.php') ?>

</html>