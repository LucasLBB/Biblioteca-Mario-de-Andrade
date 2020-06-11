    <?php
    require_once "../conexao/conexao.php";
    
    $id_Livro = $_GET['id_Livro'];

    $sql = "SELECT * from livros WHERE id_Livro=$id_Livro";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        $linha = mysqli_fetch_assoc($resultado);

        $id_Livro = $linha['id_Livro'];
        $nomeLivro = $linha['nomeLivro'];
        $autor = $linha['autor'];
        $tema = $linha['tema'];
        $dtPublicacao = $linha['dt_Publicacao'];
        $qtdCopias = $linha['quantidadeCopias'];
        $categoria = $linha['categoria'];
    }
    ?>
   