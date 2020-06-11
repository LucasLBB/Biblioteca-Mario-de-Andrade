<?php

require_once "../conexao/conexao.php";

$idCat = $_POST['idCat'];
$nomeCategoria = $_POST['nomeCategoria'];
//Altera os dados da categoria
$sql="UPDATE categoria set idCat = '$idCat', nomeCategoria='$nomeCategoria' where idCat = $idCat";

$result = mysqli_query($conexao,$sql);
mysqli_close($conexao);

if($result){
    echo '<script type="text/javascript">
            alert("Categoria Alterada com Sucesso!");
            window.history.go(-3);
          </script>';
}


