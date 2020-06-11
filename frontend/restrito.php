<?php
session_start();

require_once "../conexao/conexao.php";
require_once "../backend/exibirRes.php";


//Verificação para evitar o login sem email e nome completo

if (!isset($_SESSION['logado'])) :
    header("Location: loginht.php");
endif;

//Dados do Usuário

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM usercontrole WHERE idUser = '$id'";
$result = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Área Restrita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="header.css">
    </head>
    <body>
        <a href="../backend/logout.php" class="btnSair">Sair</a>
    </body>
</html>