<?php
session_start();

if (empty($_POST) or empty($_POST["email"]) or empty($_POST["password"])) {
  print "<script>location.href='/loginPage';</script>";
}

include('config.php');

$email = $_POST['email'];
$senha = md5(md5($_POST['password']));

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email =? AND senha =?");
$stmt->bind_param("ss", $email, $senha);

$stmt->execute();
$resultado = $stmt->get_result();

$row = $resultado->fetch_object();

$qtd = $resultado->num_rows;

if ($qtd > 0) {
  $_SESSION["usuario"] = $row->usuario;
  $_SESSION["nome"] = $row->nome;
  $_SESSION["perfil"] = $row->perfil;
  $_SESSION["id_user"] = $row->id_user; 

  header("location:../views/home");
} else {
  header("Location:../loginPage?erro=senhainvalida");
}

$stmt->close();
$conn->close();
?>