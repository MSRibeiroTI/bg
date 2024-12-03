<?php
$servername = "localhost:3306";
$username = "root";
$password = "marcelo81";
$dbname = "consultoria";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}else{
//  echo "<script>alert('Conectado com sucesso!')</script>";
}
?>