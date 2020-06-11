<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header>
        <iframe src="header.html"></iframe>
        <h1>Login</h1>
    </header>

    <form action="../backend/login.php" method="POST">
        <div>
            <input type="email" name="email" class="email" placeholder="E-mail">
        </div>

        <div>
            <input type="text" name="nomeCompleto" class="nomeCompleto" placeholder="Nome Completo">
        </div>

        <div>
            <input type="submit" class="btnLog" value="Logar">
        </div>
    </form>
</body>

</html>