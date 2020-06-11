<!DOCTYPE html>
<html>
<!--Exibi as categorias cadastradas, verifica e exibi os dados-->
<head>
    <title>Exibir Categorias</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exibirCat.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>

    <header>
        <iframe src="header.html"></iframe>
        <h1>Categorias Cadastradas</h1>
    </header>

        <table>
            <tr>
                <td class="id">ID CATEGORIA</td>
                <td class="nomeCategoria">NOME DA CATEGORIA</td>
                <td class="excluirLivro">Excluir</td>
                <td class="alterarLivro">Alterar</td>
            </tr>
        </table>
    <?php

    require_once "../conexao/conexao.php";
    

    $sql = "SELECT * from categoria";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {

            $idCat = $linha['idCat'];
            $nomeCategoria = $linha['nomeCategoria'];
          
    ?>

    <table>
        <tr>
            <td class="idCat"><?php echo $idCat ?></td>
            <td class="nomeCat"><?php echo $nomeCategoria ?></td>
            <td class="ex"><a href='../backend/excluirCat.php?idCat=<?php echo $idCat ?>' class="ex">Excluir</a></td>
            <td><a href='altCatht.php?idCat=<?php echo $idCat ?>' class="alt">Alterar</a></td>
            
        </tr>
    </table>
</body>
</html>

<?php
        }
    } else {
        echo '<script type="text/javascript">
            alert("Não foi encontrada nenhuma categoria cadastrada!");
            window.history.go(-1);
          </script>';
    exit;
    }

    mysqli_close($conexao);
?>