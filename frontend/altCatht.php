<?php
     require_once "../conexao/conexao.php";
     require "../backend/altDados.php"
?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Alterar Categoria</title>
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="cadCat.css">
    </head>

    <body>

    <header>
        <iframe src="header.html"></iframe>
        <h1>Alteração da Categoria</h1>
    </header>

        <form method="post" action="../backend/altDadosCat.php">

            <input type="text" name="idCat" class="nC" size="25" value="<?php echo $idCat ?>" placeholder="Id" readonly required><br>
            <input type="text" name="nomeCategoria" class="nomeCat" size="25" value="<?php echo $nomeCategoria ?>" placeholder="Categoria" required><br>

            <input type="submit" class="btnCadCat" value="Alterar Categoria">

        </form>
    </body>
    </html>