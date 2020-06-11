<!DOCTYPE html>
<html>
<!--Área restrita-->
<head>
    <title>Exibir Livros</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="restrito.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>

    <header>
        <iframe src="header.html"></iframe>
        <h1>Realize um Empréstimo</h1>
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
            <td class="soEmpres">Empréstimo</td>
        </tr>
    </table>
    <?php
    
    require_once "../conexao/conexao.php";
    require_once "../frontend/restrito.php";

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
            <td class="soEmprestimo"><a href='../backend/emprestimo.php?id_Livro=<?php echo $id_Livro ?>' class="soEmprestimo">Solicitar Empréstimo</a></td>
            
        </tr>
    </table>
</body>
</html>

<?php
        }
    }

   //mysqli_close($conexao);
?>