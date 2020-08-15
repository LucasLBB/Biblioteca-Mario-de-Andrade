<?php
require_once "../conexao/conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/cadLivro.css">
    <meta charset="utf-8">
</head>

<body>

    <header>
        <iframe src="header.html"></iframe>
    </header>
    <main>
        
        <h2 class="sub">Cadastre um Livro</h2>
        <form action="../backend/cadLivro.php" method="POST">
            <input type="text" name="nomeLivro" class="nL" size="25" placeholder="Nome do Livro" required><br>
            <input type="text" name="autor" size="25" class="au" placeholder="Nome do Autor" required><br>
            <input type="text" name="tema" size="25" class="te" placeholder="Tema do Livro" required><br>
            <input type="date" name="dtPublicacao" class="dtPub" size="25" required><br>
            <input type="text" name="qtdCopias" class="qtCo" size="25" placeholder="Quantidade de Cópias" required><br>
            <label class="cat2">Categoria:</label> <select name="categoria" class="cat" required>
                <?php
                $resultCategoria = "SELECT * FROM categoria";
                $resultado = mysqli_query($conexao, $resultCategoria);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <option value="<?php echo $row['nomeCategoria']; ?>"><?php echo $row['nomeCategoria']; ?></option><?php
                       }
                ?>
            </select>
            <input type="submit" class="btnCad" value="Cadastrar">
        </form>
    </main>
</body>


</html>