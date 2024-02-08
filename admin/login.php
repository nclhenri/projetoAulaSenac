<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>

    <title>Login</title>
</head>

<body class="bodyLogin">
    <main>
        <div class="loginGeral">
            <div>
                <img src="../img/logoVivaBemSemFundo.png" alt="">
            </div>
            <h2>Login</h2>
            <form action="" class="formLogin">
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="centralBotao">
                    <button type="button" onclick="carregarLogin()" class="btnLogin">Login</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>