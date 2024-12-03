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
    <link rel="stylesheet" href="../assets/css/diary.css" />
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

            <h1 id="h1">Editar banner do site</h1>

        </section>
        <?php include_once('../controls/editsite.php'); ?>
        <br>
        <div id="form">
            <form action="../controls/save_edit_banner.php?id=<?php echo $id; ?>" method="post">

                <img src="../upload_web/<?php echo $imagem_patch; ?>" alt="imagem_banner" style="width: 20%;">

                <div>
                    <label for="nome">Nome do item:</label><br>
                    <input id="title" name="title" type="text" value="<?php echo $title; ?>" autofocus required />
                </div>
                <div>
                    <label for="nome">Tema do Post:</label><br>
                    <input id="thema" name="thema" type="text" value="<?php echo $theme; ?>" autofocus required />
                </div>
                <div id="textarea">
                    <label for="text">Descrição:</label><br>
                    <textarea name="description" type="textarea" required><?php echo $description; ?></textarea>

                </div>
                <div><br>
                    <label for="status">Posição do banner no site:</label><br>
                    <select name="status" id="status">
                        <option value="0" <?php if ($status == "0") echo "selected"; ?>>Inativo</option>
                        <option value="1" <?php if ($status == "1") echo "selected"; ?>>Serviço 1</option>
                        <option value="2" <?php if ($status == "2") echo "selected"; ?>>Serviço 2</option>
                        <option value="3" <?php if ($status == "3") echo "selected"; ?>>Serviço 3</option>
                        <option value="4" <?php if ($status == "4") echo "selected"; ?>>Projeto 1</option>
                        <option value="5" <?php if ($status == "5") echo "selected"; ?>>Projeto 2</option>
                        <option value="6" <?php if ($status == "6") echo "selected"; ?>>Projeto 3</option>
                    </select>
                    <div><br>
                        <button>Salvar</button>

                    </div>
            </form>
        </div>
        <div id="btt">
            <a href="./site_admin"><button>Voltar</button></a>
        </div>


</body>

</html>