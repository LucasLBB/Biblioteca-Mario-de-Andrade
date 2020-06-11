<?php

require_once "../conexao/conexao.php";

$id_Livro = $_POST['id_Livro'];
$nomeLivro = $_POST['nomeLivro'];
$autor = $_POST['autor'];
$tema = $_POST['tema'];
$dtPublicacao = $_POST['dtPublicacao'];
$qtdCopias = $_POST['qtdCopias'];
$categoria = $_POST['categoria'];
//Alteração dos livros
$sql="UPDATE livros set id_Livro = '$id_Livro', nomeLivro='$nomeLivro',autor='$autor',tema='$tema',dt_Publicacao='$dtPublicacao',
quantidadeCopias='$qtdCopias',categoria = '$categoria' where id_Livro = $id_Livro";

$result = mysqli_query($conexao,$sql);
mysqli_close($conexao);

if($result){
    echo '<script type="text/javascript">
            alert("Livro Alterado com Sucesso!");
            window.history.go(-3);
          </script>';
}


