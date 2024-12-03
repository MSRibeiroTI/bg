<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="./assets/img/logo-icon-tab.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./assets/css/vars.css" />
  <link rel="stylesheet" href="./assets/css/login1.css" />
  <title>Barbosa e Gomes Engenharia</title>
</head>

<body>
  <header>
    <div class="header-content">
      <img src="./assets/img/logo-icon.svg" alt="Logo da Barbosa e Gomes Engenharia" />
      <h1>BARBOSA E GOMES ENGENHARIA</h1>
    </div>

    <ul>
      <li><a href="../">HOME</a></li>
    </ul>
  </header>

  <main>
    <div class="form-login">
      <form action="./controls/login.php" method="Post">
        <label for="email">LOGIN</label>
        <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required autofocus>

        <label for="password">SENHA</label>
        <input type="password" name="password" id="password" placeholder="**********" required>
        <div>
      <?php
      if (isset($_GET['erro'])) {
        echo "<p style='color: red;'>Usuário ou senha inválidos</p>";
      }
      ?>
    </div>

        <button type="submit">ENTRAR</button>
      </form>

      <p>esqueceu a senha? <a href="">clique aqui</a></p>
    </div>
    
  </main>
</body>

</html>