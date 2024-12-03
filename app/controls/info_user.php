<?php

use function PHPSTORM_META\sql_injection_subst;

session_start();


$id = $_SESSION['id_user'];


include('../controls/config.php');

$sql = "SELECT * FROM usuarios where id_user = $id";
$res = mysqli_query($conn, $sql);
$registros = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);

$name = $row['nome'];
$login = $row['usuario'];
$email = $row['email'];
$phone = $row['telefone'];

?>
<h3 class="h3">
    Nome: <?php echo $name ?> <br>
    Login: <?php echo $login ?> <br>
    Email: <?php echo $email ?> <br>
    Telefone: <?php echo $phone ?> <br>
</h3>