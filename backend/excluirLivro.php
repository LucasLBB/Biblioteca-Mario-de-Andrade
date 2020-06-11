<?php

require_once "../conexao/conexao.php";
//Exclui o livro selecionado
$id_Livro = $_GET['id_Livro'];

$sql = "DELETE from livros WHERE id_Livro = $id_Livro";
    
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo '<script type="text/javascript">
            alert("Livro Excluído!");
            window.history.go(-2);
          </script>';
    exit;
}

mysqli_close($conexao);

