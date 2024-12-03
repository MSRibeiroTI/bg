<?php

include_once('../controls/include.php');

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
            <h1>Enviar Mensagem</h1>

        </section>
        <!-- Formulário de envio de mensagem -->

        <div id="form">
            <form action="../controls/send_message.php" method="post">
                <label for="user">Selecione o Destinatário</label>
                <div class="select-wrapper">
                    <label for="userType"></label>
                    <?php include('../controls/opt_cliente.php') ?>
                    <select id="userType" name="userType">
                        <?php foreach ($row1  as $options) { ?>

                            <option value="<?php echo $options['id_user'] ?>"><?php echo $options['nome']; ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="assunto">Assunto:</label><br>
                    <input id="title" name="assunto" type="text" required />
                </div>
                <div>
                    <label for="text">Mensagem:</label><br>

                    <textarea onkeyup="limite_textarea(this.value)" class="text" name="texto" type="textarea" placeholder="Texto curto, máximo 255 caracteres." required></textarea><br>
                    <span id="cont">255</span> Caracteres Restantes <br>
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

                <div class="btt">
                    <br>

                    <button>Enviar</button>
                </div>

            </form>
            <div class="btt">
                <a href="../views/message_sended"><button class="btt">Voltar</button></a>
                <a href="./home"><button class="btt">Home</button></a>
            </div>
        </div>

    </main>

</body>

<?php include_once('../controls/footer.php'); ?>

</html>