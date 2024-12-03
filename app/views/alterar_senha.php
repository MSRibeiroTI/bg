<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<ul class="profile-icon">
    <li onclick="showSidebar()">
        <a><button>Alterar Senha</button></a>
    </li>
</ul>

<ul class="sidebar">
    <li onclick="closeSidebar()">
        <img src="../assets/img/key.svg" alt="Ícone de perfil" />
    </li>
    <li>
        <h2> <?php echo $row["usuario"]?></h2>
    </li>

    <form action="../controls/update_pass.php?id=<?php echo $row['id_user']?>" method="post">
        <input type="password" id="password" name="password" placeholder="Nova senha" required>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirme a nova senha" required>

        <script>
            $('#confirm-password').on('keyup', function() {
                if ($('#password').val() == $('#confirm-password').val()) {
                    $('#message').html('<br><button type="submit">Salvar</button>');

                } else {
                    $('#message').html('<br>As senhas não coincidem<br><br>').css('color', 'white');
                }
            })
        </script>
        
        <div><span id="message"></span></div>

    </form>
    

</ul>

    
</body>
</html>
