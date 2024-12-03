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
            <h1>Mensagen de:</h1> <br> 
        </section>
    
    <?php
    include "../controls/message_read_sended.php";
    ?>

    <div class="btt">
        <br>
        <a href="./message_sended"><button>Voltar</button></a>
        <a onclick="return confirm('Deseja realmente excluir a mensagem?')" href="../controls/message_delete?id=<?php echo $row['id_msg'] ?>"><button>Deletar</button></a>
        <abbr title="Retorna a mensagem para a caixa de entrada."><a href="../controls/message_return?id=<?php echo $row['id_msg'] ?>"><button>Não Lida</button></a></abbr>
    </div>
</body>
</html>