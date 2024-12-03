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

            <h1 id="h1">Incluir um novo banner para o site</h1>

        </section>
        <br>
        <div id="form">
            <form enctype="multipart/form-data" action="../controls/upload_banner.php" method="post">
                <div>
                    <label for="nome">Nome do item:</label><br>
                    <input id="title" name="title" type="text" autofocus required />
                </div>
                <div>
                    <label for="nome">Tema dos Post:</label><br>
                    <input id="thema" name="thema" type="text" autofocus required />
                </div>
                <div id="textarea">
                    <label for="text">Descrição:</label>
                    <span id="cont">255</span> Caracteres Restantes <br>
                    <textarea onkeyup="limite_textarea(this.value)" name="description" type="textarea" placeholder="Texto curto, máximo 255 caracteres." required></textarea>

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
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
                <div>
                    <label for="file">Imagem:</label><br>
                    <input name="imagem" type="file" required />
                </div>
                <div><br>
                    <label for="status">Posição do banner no site:</label><br>
                    <select name="status" id="status">
                        <option value="0">Inativo</option>
                        <option value="1">Serviço 1</option>
                        <option value="2">Serviço 2</option>
                        <option value="3">Serviço 3</option>
                        <option value="4">Projeto 1</option>
                        <option value="5">Projeto 2</option>
                        <option value="6">Projeto 3</option>
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