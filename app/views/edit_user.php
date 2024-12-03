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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/vars.css" />
    <link rel="stylesheet" href="../assets/css/registerUser.css" />
    <script src="../assets/js/sidebar.js"></script>
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
            <h1>Alterar dados do Usuário</h1>
        </section>
        <?php include_once('../controls/edituser.php'); ?>


        <section class="form">
            <div class="form-register">
                <form action="../controls/upd_user.php?id=<?php echo $id ?>" method="post">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="name" id="name" value="<?php echo $name ?>" required />

                    <label for="user">Usuário</label>
                    <input type="text" name="user" id="user" value="<?php echo $login ?>" required />

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>" required />

                    <label for="tel">Telefone</label>
                    <input type="tel" name="tel" id="tel" value="<?php echo $phone ?>" required />


                    <div class="select-wrapper">
                        <label for="userType">Tipo de Conta:</label>
                        <select id="userType" name="userType">
                            <option value="1" <?php if ($perfil == "1") {
                                                    echo 'selected';
                                                } ?>>Administrador</option>
                            <option value="2" <?php if ($perfil == "2") {
                                                    echo 'selected';
                                                } ?>>Cliente</option>
                        </select>
                    </div>

                    <button type="submit" id="submit-button">Salvar</button>
                    
                </form>
            </div>
            
        </section>
    </main>
    <div id="btt">
        <?php include_once('../views/alterar_senha.php'); ?>

       

        <a href="./users"><button>Voltar</button></a>
        
    </div>
    
</body>

</html>