<?php

require_once "../conexao/conexao.php";
//Exclui a categoria
$idCat = $_GET['idCat'];

$sql = "DELETE from categoria WHERE idCat=$idCat";
    
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

if($resultado){
    echo '<script type="text/javascript">
            alert("Categoria Excluída!");
            window.history.go(-2);
          </script>';
    exit;
}

