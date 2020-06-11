<?php

require_once "../conexao/conexao.php";
//Cadastra o livro
$nomeLivro = $_POST['nomeLivro'];
$autor = $_POST['autor'];
$tema = $_POST['tema'];
$dtPublicacao = $_POST['dtPublicacao'];
$qtdCopias = $_POST['qtdCopias'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO livros (nomeLivro,autor,tema,dt_Publicacao,quantidadeCopias,categoria) 
VALUES ('$nomeLivro','$autor','$tema','$dtPublicacao','$qtdCopias','$categoria')";

$consulta = "SELECT nomeLivro FROM livros WHERE nomeLivro = '$nomeLivro'";

$consultaresul = mysqli_query($conexao, $consulta);

$resultadoConsulta = mysqli_num_rows($consultaresul);

if($resultadoConsulta > 0){
    echo '<script type="text/javascript">
            alert("Erro ao cadastrar, livro já consta no banco de dados!");
            window.history.go(-1);
          </script>';
    exit;
}

$result = mysqli_query($conexao,$sql);

if($result == true){
    echo '<script type="text/javascript">
            alert("Livro Cadastrado com Sucesso!");
            window.history.go(-2);
          </script>';
  }
  
  $endresult = mysqli_close($conexao);