<?php
require_once "../conexao/conexao.php";
require "../backend/obterDados.php"
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alterar Livros</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="obDados.css">
</head>


<body>
    <main>
        <header>
            <iframe src="header.html"></iframe>
            <h1>Alteração do Livro</h1>
        </header>
        <!--Pega os dados inputados nos campos e manda para o altLivro.php para realizar as alterações-->
        <form method="post" action="../backend/altLivro.php">
            <input type="text" name="id_Livro" class="id_Livro" size="25" value="<?php echo $id_Livro ?>" placeholder="Nome do Livro" readonly required><br>
            <input type="text" name="nomeLivro" class="nL" size="25" value="<?php echo $nomeLivro ?>" placeholder="Nome do Autor" required><br>
            <input type="text" name="autor" class="au" value="<?php echo $autor ?>" placeholder="Tema do Livro" required><br>
            <input type="text" name="tema" class="te" value="<?php echo $tema ?>" required><br>
            <input type="date" class="dtPub" name="dtPublicacao" value="<?php echo $dtPublicacao ?>" placeholder="Quantidade de Cópias" required><br>
            <input type="text" class="qtCo" name="qtdCopias" value="<?php echo $qtdCopias ?>" required><br>
            <select name="categoria" class="cat" value="<?php echo $categoria ?>" required>
                <?php
                //Seleciona todas as categorias que estão cadastradas no banco de dados.
                $resultCategoria = "SELECT * FROM categoria";
                $resultado = mysqli_query($conexao, $resultCategoria);
                while ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <option value="<?php echo $row['nomeCategoria']; ?>"><?php echo $row['nomeCategoria']; ?></option><?php
                    }
                ?>
            </select>

            <input type="submit" class="btnAlt" value="Alterar">

        </form>
    </main>
</body>

</html>