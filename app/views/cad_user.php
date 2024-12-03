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
                <form action="../controls/adduser.php" method="post">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="name" id="name" placeholder="Nome Completo" required />

                    <label for="user">Usuário</label>
                    <input type="text" name="user" id="user" placeholder="Nome de usuário" required />

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required />

                    <label for="tel">Telefone</label>
                    <input type="tel" name="tel" id="tel" placeholder="(XX) XXXXX-XXXX" required />

                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="**********" required />

                    <div class="select-wrapper">
                        <label for="userType">Tipo de Conta:</label>
                        <select id="userType" name="userType">
                            <option value="2">Selecione</option>
                            <option value="2">Cliente</option>
                            <option value="1">ADM</option>
                        </select>
                    </div>

                    <button type="submit" id="submit-button">Cadastrar</button>
                    
                </form>
            </div>
            
        </section>
    </main>
    <div id="btt">
    <a href="./users"><button>Voltar</button></a>
    </div>
</body>

</html>