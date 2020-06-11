<?php

require_once "../conexao/conexao.php";
//Cadastra o Usuário
$nomeCompleto = $_POST['nomeCompleto'];
$dt_Nasc = $_POST['dtNasc'];
$grauEscolaridade = $_POST['escolaridade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$email = $_POST['email'];

$sql = "INSERT INTO usercontrole (nomeCompleto,dtNasc,escolaridade,endereco,telefone,genero,email) 
VALUES ('$nomeCompleto','$dt_Nasc','$grauEscolaridade','$endereco','$telefone','$genero','$email')";

// separando yyyy, mm, ddd
list($ano, $mes, $dia) = explode('-', $dt_Nasc);
// data atual
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
// Descobre a unix timestamp da data de nascimento da pessoa
$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
// cálculo
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

if ($idade < 14){ //Exige a idade minima de 14 anos para se cadastrar no site. 
    echo '<script type="text/javascript">
            alert("Erro ao cadastrar, idade não permitida!");
            window.history.go(-1);
          </script>';
    exit;
}

$telResult = strlen($telefone);
//Só aceita o DD + número ex: 11 9874 1045
if($telResult != 10){
    echo '<script type="text/javascript">
            alert("Erro ao cadastrar, telefone inválido!");
            window.history.go(-1);
          </script>';
    exit;
}

//Valida o e-mail
if(filter_var($email, FILTER_VALIDATE_EMAIL) && (!empty($email))) {
}else {
    echo '<script type="text/javascript">
            alert("Erro ao cadastrar, e-mail Inválido!");
            window.history.go(-1);
        </script>';
    exit;
}

//Verifica se o email já consta no banco de dados
$consulta = "SELECT email FROM usercontrole WHERE email = '$email'";

$consultaresul = mysqli_query($conexao, $consulta);

$resultadoConsulta = mysqli_num_rows($consultaresul);

if($resultadoConsulta > 0){
    echo '<script type="text/javascript">
            alert("Erro ao cadastrar, e-mail já consta no banco de dados!");
            window.history.go(-1);
          </script>';
    exit;
}

$result = mysqli_query($conexao, $sql);

if($result == true){
  echo '<script type="text/javascript">
          alert("Cadastrado com Sucesso!");
          window.history.go(-1);
        </script>';
}

$endresult = mysqli_close($conexao);

