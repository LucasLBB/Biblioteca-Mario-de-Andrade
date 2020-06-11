<?php
    require_once "../conexao/conexao.php";

    $idCat = $_GET['idCat'];
    //Seleciona o id da categoria
    $sql = "SELECT * from categoria WHERE idCat=$idCat";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $linha = mysqli_fetch_assoc($resultado);

        $idCat = $linha['idCat'];
        $nomeCategoria = $linha['nomeCategoria'];
    }
    ?>