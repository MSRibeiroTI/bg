<?php
session_start();
echo "Bem-vindo " . $_SESSION["usuario"];
echo date(", d/m/Y");
if (empty($_SESSION)) {
    print "<script>location.href='../loginPage';</script>";
} elseif (($_SESSION["perfil"]) == '2') {
    print "<script>location.href='./clientPage';</script>";
}
include("../controls/config.php");

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h4>Sistema Diário de Construção Civil</h4>
    
</body>

</html>