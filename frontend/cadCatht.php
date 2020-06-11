<?php
require_once "../conexao/conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Categorias</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="cadCat.css">
    <meta charset="utf-8">
</head>

<body>
    <main>
        <header>
            <iframe src="header.html"></iframe>
        </header>
        <h2 class="sub">Cadastre uma Categoria</h2>
        <form action="../backend/cadCategoria.php" method="POST">
            <input type="text" name="nomeCategoria" class="nC" size="25" placeholder="Nome da Categoria" required><br>

            <input type="submit" class="btnCadCat" value="Cadastrar Categoria">
        </form>
    </main>
</body>


</html>