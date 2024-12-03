<?php
include_once('./app/controls/config.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./web/css/web.css">

    <link rel="shortcut icon" href="./app/assets/img/logo-icon-tab.ico" type="image/x-icon">
    <title>BG Engenharia</title>
</head>

<body>
    <section id="home">

        <header>
            <div class="head">
                <div class="logo">
                    <img src="./web/img/logo.png" alt="logo" id="logo">
                </div>
                <div class="bg">
                    <h1>BARBOSA E GOMES ENGENHARIA</h1>
                </div>
                <div class="zap">
                    <h4>87-9.9922-2041 <a href="https://api.whatsapp.com/send?phone=5587999222041" target="_blank"><img src="./web/img/whatsappweb.png" alt="WhatsApp" width="35px" height="auto"></a>
                    </h4>

                    <h4>87-9.9121-5231 <a href="https://api.whatsapp.com/send?phone=5587991215231" target="_blank"><img src="./web/img/whatsappweb.png" alt="WhatsApp" width="35px" height="auto"></a>
                    </h4>
                    <h4><a style="color: #F94D0E;" href="mailto:barbosaegomes.eng@gmail.com">barbosaegomes.eng@gmail.com</a></h4>

                </div>

            </div>
            <div class="social">
                <div>
                    <i class="fab fa-google"></i><a href="https://www.instagram.com/barbosaegomes.eng/" target="_blank" rel="noopener noreferrer"></i> <img src="./web/img/instagram.png" alt="">
                    </a>
                </div>
                <div>
                    <i class="fab fa-google"></i><a href="https://www.instagram.com/barbosaegomes.eng/" target="_blank" rel="noopener noreferrer"></i> <img src="./web/img/facebook.png" alt="">
                    </a>
                </div>
                <div>
                    <i class="fab fa-google"></i><a href="https://www.instagram.com/barbosaegomes.eng/" target="_blank" rel="noopener noreferrer"></i> <img src="./web/img/linkdin.png" alt="">
                    </a>
                </div>
            </div>


            <div class="topnav" id="myTopnav">
                <nav>
                    <a href="#serviços">Serviços   </a>
                    <a href="#empresa">A Empresa   </a>
                    <a href="#projetos">Projetos   </a>
                    <a href="#contato">Contato   </a>
                    <a href="#local">Localização   </a>
                    <a href="./app/loginPage">Login</a>
                </nav>
            </div>
        </header>
    </section>
    <main>
        <section id="serviços">
            <h2>Nossos Serviços:</h2>
            <div class="bannerpai">
                <!-- banner com imagens-->
                <div class="banner">
                    <?php include('./app/controls/banner01.php'); ?>
                </div>

                <div class="banner">
                    <?php include('./app/controls/banner02.php'); ?>
                </div>

                <div class="banner">
                    <?php include('./app/controls/banner03.php'); ?>
                </div>
            </div>


        </section>

        <section id="empresa">
            <div>
                <div class="empresa">
                    <div>
                        <h2>A Empresa</h2>
                    </div>
                    <p><strong>Barbosa e Gomes Engenharia Ltda.</strong>, é uma empresa de engenharia civil localizada
                        em Arcoverde - PE ...</p>

                    <h2>Missão</h2>
                    <p>Temos a missão de executar edificações com qualidade e respeitando os compromissos assumidos,
                        prestando
                        uma assistência verdadeira e continua aos clientes para que entendam que a Barbosa e Gomes
                        engenharia
                        não faz apenas construções ela cuidara dos sonhos construtivos dos seus clientes.</p>

                    <h2>Valores</h2>
                    <p>Temos como valores enraizados no surgimento da Barbosa e Gomes engenharia o Compromisso de
                        construir
                        com
                        qualidade; A responsabilidade de honrarmos compromissos assumidos; O cuidado e zelo com nossos
                        clientes
                        para que se sintam verdadeiramente importantes e saibam que cuidaremos dos seus sonhos
                        construtivos.
                    </p>
                </div>
            </div>
        </section>

        <section id="projetos">
            <h2>Nossos Projetos:</h2>
            <div class="bannerpai">
                <!-- banner com imagens-->
                <div class="banner">
                    <?php include('./app/controls/banner04.php'); ?>
                </div>

                <div class="banner">
                    <?php include('./app/controls/banner05.php'); ?>
                </div>

                <div class="banner">
                    <?php include('./app/controls/banner06.php'); ?>
                </div>
            </div>


        </section>




        <section id="contato">

            <form action="./app/controls/message_save.php" method="post">
                <div>
                    <h2>Utilize os campos abaixo para deixar sua mensagem, em breve retornaremos.: <br><br></h2>
                </div>
                <label for="nome">Nome:
                    <input type="text" name="nome" id="nome" required />
                </label>

                <label for="email">E-mail:
                    <input type="email" name="email" id="email" required />
                </label>

                <label for="telefone">Telefone:
                    <input type="tel" name="telefone" id="telefone" title="Insira" placeholder="00-00000-0000" required>
                    <br>

                    <label for="mensagem">Mensagem:

                        <span id="cont">240</span> Restantes <br>
                        <textarea onkeyup="limite_textarea(this.value)" id="text" name="text" required></textarea>

                    </label><br>
                    <button type="submit" id="submit-button">Enviar</button>


            </form>

            <script>
                function limite_textarea(valor) {
                    quant = 240;
                    total = valor.length;
                    if (total <= quant) {
                        resto = quant - total;
                        document.getElementById('cont').innerHTML = resto;
                    } else {
                        document.getElementById('text').value = valor.substr(0, quant);
                    }
                }
                const submitButton = document.getElementById("submit-button");
                const input = document.getElementById("text");

                submitButton.addEventListener("click", function() {
                    if (input.value.length > 0) {
                        alert("Mensagem enviada com sucesso! Em breve retornaremos.");
                    }
                })
            </script>

        </section>
        <section id="local">
            <div class="mapa">
                <br>
                <h3>Nossa Localização: </h3> <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6637.601107854554!2d-37.070528305235946!3d-8.427053748386983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1715187250085!5m2!1spt-BR!2sbr" width="70%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
                <h4>Rua da Esperaça, nº 22, Alabama, Arcoverde - PE</h4>
            </div>
        </section>
    </main>
</body>

<footer>
    &copy; 2024 - Desenvolvido pelo <strong>3º Período de ADS</strong>. Todos os direitos reservados.<br />
    E-mail para contato: 2023130022@aesa-cesa.br <br>
    AESA - Autarquia de Ensino Superior de Arcoverde

    <div id="cookieNotice" style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: #333; color: white; text-align: center; padding: 50px;">
        Este site utiliza cookies para garantir uma melhor experiência de navegação. Ao continuar navegando, você concorda com o uso de cookies.
        <button onclick="acceptCookies()">Aceitar</button>
    </div>
    <script>
        function acceptCookies() {
            // Set a cookie to remember that the user has accepted the use of cookies
            document.cookie = "cookiesAccepted=true; expires=Fri, 31 Dec 2023 23:59:59 GMT; path=/";
            document.getElementById("cookieNotice").style.display = "none";
        }

        // Check if the user has already accepted the cookies
        if (document.cookie.includes("cookiesAccepted=true")) {
            document.getElementById("cookieNotice").style.display = "none";
        }
    </script>
</footer>

</html>