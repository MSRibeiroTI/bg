<?php
include('config.php');
$timezone = new DateTimeZone('America/Sao_Paulo');

$nome = 'Marcelo de Souza Ribeiro';
$usuario = 'Matheus';
$email = 'matheus@teste.com';
$fone = '87 99804 3731';
$senha = '12345';
$nivel = '1';
$hash = password_hash($senha, PASSWORD_DEFAULT);
$agora = new DateTime('now', $timezone);


$hash2 = md5($senha);

$sql = "INSERT INTO usuarios (nome, usuario, email, senha, telefone, perfil) VALUES ('$nome', '$usuario', '$email','$hash', '$fone', '$nivel')";
$resultado = $conn->query($sql) or trigger_error($conn->error);

    echo $hash;
    ?>
    <br>
    <?php
    echo $agora->format('d/m/Y H:i:s')

?>
<br>
<?php
 echo $hash2;  
 echo $agora->format('d/m/y');
 ?>


