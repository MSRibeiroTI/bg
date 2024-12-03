<?php
include_once('../controls/include.php');
include_once('../controls/edit_diary_values.php');

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

            <h1 id="h1">Editar diário de obra</h1>

        </section>
        <br>
        <?php
        include "../controls/project_info.php";
        ?>
        <div id="form">
            <form action="../controls/save_edit_upload.php?id=<?php echo $row['id_proj']; ?>" method="post">
                <label for="">Imagem:</label><br>
                <img src="../uploads/<?php echo $imagem_patch ?>" alt="imagem_banner" style="width: 20%;">
                <div>
                    <label for="nome">Nome do item:</label><br>
                    <input id="title" name="nome_evento" type="text" value="<?php echo $nome_evento ?>" required />
                    <input type="hidden" value="<?php echo $id2 ?>" name="id" />

                </div>
                <div id="textarea">
                    <label for="text">Descrição:</label><br>

                    <textarea onkeyup="limite_textarea(this.value)" name="descricao_evento" type="textarea" placeholder="Texto curto, máximo 255 caracteres." required><?php echo $description ?></textarea>
                    <br><span id="cont">255</span> Caracteres Restantes <br>
                    <script>
                        function limite_textarea(valor) {
                            quant = 255;
                            total = valor.length;
                            if (total <= quant) {
                                resto = quant - total;
                                document.getElementById('cont').innerHTML = resto;
                            } else {
                                document.getElementById('text').value = valor.substr(0, quant);
                            }
                        }
                    </script>
                </div>
                <div><br>
                    <select name="mes" id="mes">
                        <option value="<?php echo $mes ?>"><?php echo $mes ?>º Mês</option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo '<option value="' . $i . '">' . $i . 'º Mês</option>';
                        }
                        ?>
                    </select>
                    <div><br>
                        <button>Salvar</button>
                    </div>
            </form>
        </div>
        <div id="btt">
            <a href="./project_open?id=<?php echo $row['id_proj'] ?>"><button>Voltar</button></a>
        </div>

</body>

</html>