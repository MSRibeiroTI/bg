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
    <title>Projeto</title>
</head>

<body>
    <header>
        <div>
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>
    </header>
    <main>
        <section class="title">
            <h1>Projeto</h1> <br>
        </section>

        <?php
        include "../controls/project_read.php";
        ?>
        <div class="btt">
            <br>
            <a href="./project"><button>Voltar</button></a>
            <?php if ($row['arquivo'] == '1') { ?>
            <a href="../views/edit_proj?id=<?php echo $row['id_proj'] ?>"><button>Editar</button></a>

            <a href="./add_diary?id=<?php echo $row['id_proj'] ?>"><button>Incluir Diário</button></a>
            <?php } ?>
        </div>

        <section class="title">
            <h1>Diário de Obra</h1> <br>
        </section>

        <?php
        include "../controls/project_diary.php";
        ?>
    
</body>

</html>