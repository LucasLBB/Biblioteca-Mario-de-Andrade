<?php

require_once "../conexao/conexao.php";

$idCat = $_POST['idCat'];
$nomeCategoria = $_POST['nomeCategoria'];
//Altera os dados da categoria

$consulta = "SELECT nomeCategoria FROM categoria WHERE nomeCategoria = '$nomeCategoria'";

$consultaresul = mysqli_query($conexao, $consulta);

$resultadoConsulta = mysqli_num_rows($consultaresul);

if($resultadoConsulta > 0){
    echo '<script type="text/javascript">
            alert("Erro ao alterar, categoria já consta no banco de dados!");
            window.history.go(-1);
          </script>';
    exit;
}

$sql="UPDATE categoria set idCat = '$idCat', nomeCategoria='$nomeCategoria' where idCat = $idCat";

$result = mysqli_query($conexao,$sql);
mysqli_close($conexao);

if($result){
    echo '<script type="text/javascript">
            alert("Categoria Alterada com Sucesso!");
            window.history.go(-3);
          </script>';
}


