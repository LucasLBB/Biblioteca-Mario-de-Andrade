<!DOCTYPE html>
<html>
<!--Verifica e exibi os livros-->
<head>
    <title>Exibir Livros</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/exibir.css">
    <link rel="stylesheet" href="styles/header.css">
</head>

<body>

    <header>
        <iframe src="header.html"></iframe>
        <h1>Livros Cadastrados</h1>
    </header>
        <table>
            <tr>
                <td class="id_Livro">ID Livro</td>
                <td class="nomeLivro">Nome do Livro</td>
                <td class="autorLivro">Autor</td>
                <td class="temaLivro">Tema</td>
                <td class="dataPublicacao">Data de Publicação</td>
                <td class="quantidadeCopias">Quantidade de Cópias</td>
                <td class="categoriaLivro">Categoria</td>
                <td class="excluirLivro">Excluir</td>
                <td class="alterarLivro">Alterar</td>
            </tr>
        </table>
    <?php

    require_once "../conexao/conexao.php";
    
    $sql = "SELECT * from livros";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {

            $id_Livro = $linha['id_Livro'];
            $nomeLivro = $linha['nomeLivro'];
            $autor = $linha['autor'];
            $tema = $linha['tema'];
            $dtPublicacao = $linha['dt_Publicacao'];
            $qtdCopias = $linha['quantidadeCopias'];
            $categoria = $linha['categoria'];
    ?>

    <table>
        <tr>
            <td class="id"><?php echo $id_Livro ?></td>
            <td class="nome"><?php echo $nomeLivro ?></td>
            <td class="autor"><?php echo $autor ?></td>
            <td class="tema"><?php echo $tema ?></td>
            <td class="dtPub"><?php echo $dtPublicacao ?></td>
            <td class="qtdCo"><?php echo $qtdCopias ?></td>
            <td class="categoria"><?php echo $categoria ?></td>
            <td class="ex"><a href='../backend/excluirLivro.php?id_Livro=<?php echo $id_Livro ?>' class="ex">Excluir</a></td>
            <td class="alt"><a href='obterDadosht.php?id_Livro=<?php echo $id_Livro ?>' class="alt">Alterar</a></td>
            
        </tr>

    </table>
</body>
</html>

<?php
        }
    } else {
        echo '<script type="text/javascript">
            alert("Não foi encontrado nenhum livro cadastrado!");
            window.history.go(-1);
          </script>';
    exit;
    }

    mysqli_close($conexao);
?>