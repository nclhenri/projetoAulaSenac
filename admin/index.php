<?php
$pagina = @$_GET['p'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Instrutores</title>
</head>

<body>

    <header>
        <img src="../img/logoVivaBem.png" alt="">
        <h1>
            <?php
            switch ($pagina) {
                case 'dashboard':
                    echo 'Dashboard';
                    break;
                case 'matriculas':
                    echo 'Matrículas';
                    break;
                case 'exercicios':
                    echo 'Exercícios';
                    break;
                case 'aulas':
                    echo 'Aulas';
                    break;
                case 'treinos':
                    echo 'Treinos';
                    break;
                case 'instrutores':
                    echo 'Instrutores';
                    break;
                case 'alunos':
                    echo 'Alunos';
                    break;
                case 'pagamentos':
                    echo 'Pagamentos';
                    break;
                case 'relatorio':
                    echo 'Relatório';
                    break;
                case 'contato':
                    echo 'Contato';
                    break;
                case 'ajuda':
                    echo 'Ajuda e Suporte';
                    break;

                default:
                    echo 'Dashboard';
                    break;
            }
            ?>
        </h1>
        <div>
            <img src="../img/user.png" alt="">
            <h2>Nome</h2>
        </div>
    </header>
    <main>
        <aside>
            <a href="index.php?p=dashboard" class="<?php echo (($pagina == 'dashboard') || ($pagina == '')) ? 'menuAtivo' : ''; ?>">DASHBOARD</a>
            <a href="index.php?p=matriculas" class="<?php echo ($pagina == 'matriculas') ? 'menuAtivo' : ''; ?>">MATRÍCULAS</a>
            <a href="index.php?p=exercicios" class="<?php echo ($pagina == 'exercicios') ? 'menuAtivo' : ''; ?>">EXERCÍCIOS</a>
            <a href="index.php?p=aulas" class="<?php echo ($pagina == 'aulas') ? 'menuAtivo' : ''; ?>">AULAS</a>
            <a href="index.php?p=treinos" class="<?php echo ($pagina == 'treinos') ? 'menuAtivo' : ''; ?>">TREINOS</a>
            <a href="index.php?p=instrutores" class="<?php echo ($pagina == 'instrutores') ? 'menuAtivo' : ''; ?>">INSTRUTORES</a>
            <a href="index.php?p=alunos" class="<?php echo ($pagina == 'alunos') ? 'menuAtivo' : ''; ?>">ALUNOS</a>
            <a href="index.php?p=pagamentos" class="<?php echo ($pagina == 'pagamentos') ? 'menuAtivo' : ''; ?>">PAGAMENTOS</a>
            <a href="index.php?p=relatorio" class="<?php echo ($pagina == 'relatorio') ? 'menuAtivo' : ''; ?>">RELATÓRIO</a>
            <a href="index.php?p=contato" class="<?php echo ($pagina == 'contato') ? 'menuAtivo' : ''; ?>">E-MAIL</a>
            <a href="index.php?p=ajuda" class="<?php echo ($pagina == 'ajuda') ? 'menuAtivo' : ''; ?>">AJUDA E SUPORTE</a>
        </aside>
        <div class="box">
            <?php
            switch ($pagina) {
                case 'dashboard':
                    echo 'PG Dashboard';
                    break;
                case 'matriculas':
                    echo 'PG Matriculas';
                    break;
                case 'exercicios':
                    require_once('exercicios/exercicio.php');
                    break;
                case 'aulas':
                    echo 'PG Aulas';
                    break;
                case 'treinos':
                    echo 'PG Treinos';
                    break;
                case 'instrutores':
                    require_once('instrutores/funcionario.php');
                    break;
                case 'alunos':
                    require_once ('alunos/aluno.php');
                    break;
                case 'pagamentos':
                    echo 'PG Pagamentos';
                    break;
                case 'relatorio':
                    echo 'PG Relatório';
                    break;
                case 'contato':
                    require_once('contato.php/contato.php');
                    break;
                case 'ajuda':
                    echo 'PG Ajuda';
                    break;

                default:
                    echo 'PG Dashboard';
                    break;
            }

            ?>
        </div>
    </main>

    <footer>
        <div class="direitos">
            <h2>Direitos reservados ao TI21 - Senac SMP</h2>
        </div>
        <div class="desenvolvido">
            <h2>Desenvolvido por Alessandro e Ricardo</h2>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./js/script.js"></script>
</body>


</html>