<?php

require_once "../conexao/conexao.php";
require_once "../frontend/restrito.php";
//Realiza o empréstimo adicionando o id do usuário e o livro que selecionou no banco de dados
$idUser = $_SESSION['id_user'];
$idLivro = $_GET['id_Livro'];
//Verifica se o livro já foi emprestado
$sqlConsulta = "SELECT id_Livro FROM emprestimo WHERE id_Livro = '$idLivro'";

$resultado = mysqli_query($conexao,$sqlConsulta);

$verifica = mysqli_num_rows($resultado);
//Se estiver emprestado, não insere no banco
if($verifica > 0){
    echo '<script type="text/javascript">
            alert("Livro Indisponível no Momento!");
            window.history.go(-1);
          </script>';
    exit;
}else{
    $sql = "INSERT INTO emprestimo (idUser, id_Livro) VALUES('$idUser','$idLivro')";

    $result = mysqli_query($conexao,$sql);

    if($result == true){
        echo '<script type="text/javascript">
                alert("Livro Emprestado com Sucesso!");
                window.history.go(-1);
              </script>';
      }
        
}
