<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicionando jQuery -->
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick-theme.css">

    <!-- Adicionando Lity -->
    <link rel="stylesheet" href="./css/lity.css">

    <!-- Adicionando animete.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Nosso estilo é sempre por último -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsivo.css">
    <title>Academia Viva Bem - Home</title>
</head>

<body>
    <?php require_once('conteudo/header.php'); ?>

    <main>
        <?php require_once('conteudo/banner.php'); ?>
        <?php require_once('conteudo/sobre.php'); ?>
        <?php require_once('conteudo/servico.php'); ?>
        <?php require_once('conteudo/galeria.php'); ?>
        <?php require_once('conteudo/equipe.php'); ?>
        <?php require_once('conteudo/destaque.php'); ?>
    </main>
    <?php require_once('conteudo/rodape.php'); ?>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="./js/lity.min.js"></script>
    <script src="./js/script.js"></script>

</body>

</html>