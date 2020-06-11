<?php
session_start();

require_once "../conexao/conexao.php";

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$nomeCompleto = mysqli_real_escape_string($conexao, $_POST['nomeCompleto']);

if(empty($email) || empty($nomeCompleto)):
    echo '<script type="text/javascript">
            alert("Erro ao logar, preencha todos os campos!");
            window.history.go(-1);
          </script>'; 
else:
    $sql = "SELECT email FROM usercontrole WHERE email = '$email'";
    $result = mysqli_query($conexao,$sql);
    $row = mysqli_num_rows($result);
    
    if ($row > 0):
        $sql = "SELECT * FROM usercontrole WHERE email = '$email' and nomeCompleto = '$nomeCompleto'";
        $result = mysqli_query($conexao,$sql);
        $row = mysqli_num_rows($result);

        if($row == 1):
            $dados = mysqli_fetch_array($result);
            mysqli_close($conexao);
            $_SESSION['logado'] = true;
            $_SESSION['id_user'] = $dados['idUser'];
            header("Location:../frontend/restrito.php?id={$_SESSION['id_user']}");

        else:
            echo '<script type="text/javascript">
                    alert("Erro ao logar, e-mail ou nome inválidos!");
                    window.history.go(-1);
                  </script>';
        endif;          
    else:
        echo '<script type="text/javascript">
                alert("Erro ao logar, e-mail ou nome inválidos!");
                window.history.go(-1);
              </script>';
    endif; 
endif;
    



