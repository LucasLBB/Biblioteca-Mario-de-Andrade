<?php

require_once "../conexao/conexao.php";

$nomeCategoria = $_POST['nomeCategoria'];

$sql = "INSERT INTO categoria (nomeCategoria) VALUES ('$nomeCategoria')";
//Verifica se a categoria já existe
$consulta = "SELECT nomeCategoria FROM categoria WHERE nomeCategoria = '$nomeCategoria'";

$consultaresul = mysqli_query($conexao, $consulta);

$resultadoConsulta = mysqli_num_rows($consultaresul);

if($resultadoConsulta > 0){
    echo '<script type="text/javascript">
            alert("Erro ao cadastrar, categoria já consta no banco de dados!");
            window.history.go(-1);
          </script>';
    exit;
}

$result = mysqli_query($conexao,$sql);

if($result == true){
    echo '<script type="text/javascript">
            alert("Categoria Cadastrada com Sucesso!");
            window.history.go(-2);
          </script>';
  }
  
  $endresult = mysqli_close($conexao);