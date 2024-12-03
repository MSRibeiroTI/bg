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
    <link rel="stylesheet" href="../assets/css/adm.css" />
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

            <h1 id="h1">Barbosa e Gomes Engenharia</h1>

        </section>

        <section class="grid">
            <div class="grid-item">
                <a href="./users">
                    <img src="../assets/img/user-icon.svg" alt="Ícone de usuários" onerror="this.style.display = 'none'" />

                    Usuários
                </a>
            </div>

            <div class="grid-item">
                <a href="./engenheiros">
                    <img src="../assets/img/engineer-icon.svg" alt="Ícone dos engenheiros" onerror="this.style.display = 'none'" />

                    Engenheiros
                </a>
            </div>

            <div class="grid-item">
                <a href="./project">
                    <img src="../assets/img/project-icon.svg" alt="Ícone de um blueprint" onerror="this.style.display = 'none'" />

                    Projetos
                </a>
            </div>

            <div class="grid-item">
                <a href="./message">
                    <img src="../assets/img/message-icon.svg" alt="Ícone de um envelope" onerror="this.style.display = 'none'" />
                    <strong><?php include_once('../controls/count_message.php'); ?></strong>
                    Mensagens
                </a>
            </div>
            <div class="grid-item">
                <a href="./site_admin">
                    <img src="../assets/img/site.svg" alt="Ícone de saída" onerror="this.style.display = 'none'" />

                    Admin Web Page
                </a>
            </div>
            <div class="grid-item">
                <a href="../controls/logout">
                    <img src="../assets/img/exit-icon.svg" alt="Ícone de saída" onerror="this.style.display = 'none'" />

                    Sair
                </a>
            </div>
        </section>

    </main>
</body>
<footer>
    &copy; 2024 - Desenvolvido pelo <strong>3º Período de ADS</strong>. Todos os direitos reservados.<br />
    E-mail para contato: 2023130022@aesa-cesa.br <br>
    CESA - Centro de Ensino Superior de Arcoverde - Arcoverde - Pernambuco - Brasil
</footer>

</html>