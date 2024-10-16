<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <title>PHP</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>Suporte</li>
                <li>Sobre</li>
                <li>Termos</li>
            </ul>
        </nav>
    </header>

    <section class="container">
        <form method="post" action="script.php">
            <div class="main-login">
                <img src="./src/Atenx 1.png">

                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <!-- <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div> -->
                <div class="buttons">
                    <div class="login">
                        <button class="btn-confirm" type="submit" name="confirmar" value="confirmar">confirmar</button>
                        <!-- <button class="btn-cadastro" type="submit" name="Cadastro" value="Entrar">Cadastre-se</button> -->
                    </div>
                </div>
            </div>
            <footer></footer>
    </section>
    </form>
</body>

<footer></footer>

</html>