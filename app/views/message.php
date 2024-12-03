<?php
include_once('../controls/include.php')

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
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Mensagens</title>
</head>
<body>
<header>
        <div>
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>
    </header>
    <main>
        <section class="title">
            <h1>Novas Mensagens</h1> <br> 
            

        </section>
       
    <?php
    $busca = $_POST['busca1'] ?? '';
    $data = $_POST['data'] ?? '';
       if ($busca == '' && $data == '') {
        include "../controls/view_message.php";}
    

    ?>

    <?php
    mysqli_close($conn);
    ?>
    <div class="btt">
        <br>
        <a href="./home"><button class="btt">Voltar</button></a>
        <a href="./message_sended"><button class="btt">Enviadas</button></a>
        <a href="./message_opened"><button class="btt">Abertas</button></a> 
    </div>
</body>
<?php include_once('../controls/footer.php'); ?>
</html>