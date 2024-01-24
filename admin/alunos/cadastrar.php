<?php
if (isset($_POST['nomeAluno'])) {

    $nomeAluno = $_POST['nomeAluno'];
    $dataNascAluno = $_POST['dataNascAluno'];
    $emailAluno = $_POST['emailAluno'];
    $senhaAluno = $_POST['senhaAluno'];
    $statusAluno = $_POST['statusAluno'];

    $arquivo = $_FILES['fotoAluno'];

    if ($arquivo['erro']) {
        throw new Exception('Error'.$arquivo['error']);
    }
    if (move_uploaded_file($arquivo['tmp_name'], '../img/aluno/' . $arquivo['name'])) {
        $fotoAluno = 'aluno/' . $arquivo['name'];
    } else {
        throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
    }

    require_once('class/alunos.php');

    $aluno = new AlunosClass();

    $aluno->nomeAluno = $nomeAluno;
    $aluno->dataNascAluno = $dataNascAluno;
    $aluno->emailAluno = $emailAluno;
    $aluno->senhaAluno = $senhaAluno;
    $aluno->statusAluno = $statusAluno;
    $aluno->fotoAluno = $fotoAluno;

    $aluno->Cadastrar();

}
?>

<div class="estruturaCadAluno">

    <form action="index.php?p=alunos&a=cadastrar" method="POST" enctype="multipart/form-data">

        <div>
            <label for="formFile" class="form-label">Foto:</label>
            <input class="form-control" type="file" name="fotoAluno" id="fotoAluno">
        </div>

        <div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do aluno:</label>
                <input type="text" name="nomeAluno" id="nomeAluno" placeholder="Informe o nome:" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div>
            <label for="dataNascAluno" class="form-label">Data de nascimento:</label>
            <input id="dataNascAluno" name="dataNascAluno" type="date" />
        </div>

        <div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="emailAluno" id="emailAluno" placeholder="Informe o email:"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="senhaAluno" id="senhaAluno" placeholder="Informe a senha:"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        </div>

        <div>
            <div class="statusLink">
                <div class="status">
                    <div class="form-check">
                        <h2>Status</h2>
                        <input class="form-check-input" type="radio" name="statusAluno" id="statusAluno" value="ATIVO"
                            checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAluno" id="statusAluno"
                            value="INATIVO">
                        <label class="form-check-label" for="exampleRadios2">
                            Inativo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusAluno" id="statusAluno"
                            value="DESATIVADO">
                        <label class="form-check-label" for="exampleRadios2">
                            Desativado
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="botaoInfo">
            <button type="submit" class="btn btn-primary">Cadastrar informações</button>
        </div>


    </form>

</div>