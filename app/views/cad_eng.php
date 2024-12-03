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
    <link rel="stylesheet" href="../assets/css/registerUser.css" />
    <title>Barbosa e Gomes Engenharia</title>
</head>

<body>
    <header>
        <div class="header-content">
            <img src="../assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
        </div>
    </header>

    <main>
        <section class="title">
            <h1>Cadastrar Usuário</h1>
        </section>

        <section class="form">
            <div class="form-register">
                <form action="../controls/addeng.php" method="post">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Nome Completo" required />

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required />

                    <label for="tel">Telefone</label>
                    <input type="tel" name="tel" id="tel" placeholder="(XX) XXXXX-XXXX" required />

                    <label for="reg">Registro</label>
                    <input type="text" name="reg" id="reg" placeholder="CREA" required />

                    <button type="submit" id="submit-button">Cadastrar</button>
                </form>
            </div>

        </section>
    </main>
    <div id="btt">
        <a href="./engenheiros"><button>Voltar</button></a>
    </div>
</body>

</html>