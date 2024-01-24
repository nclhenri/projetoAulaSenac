<?php
if (isset($_POST['nomeExercicio'])) {

    $nomeExercicio =         $_POST['nomeExercicio'];

    $descricaoExercicio =    $_POST['descricaoExercicio'];

    $grupoMuscular =   $_POST['grupoMuscularExercicio'];

    $statusExercicio =       $_POST['statusExercicio'];

    $linkExercicio =         $_POST['linkExercicio'];

    $arquivo =               $_FILES['fotoExercicio'];

    if ($arquivo['erro']) {
        throw new Exception('Error' . $arquivo['error']);
    }
    if (move_uploaded_file($arquivo['tmp_name'], '../img/exercicio/' . $arquivo['name'])) {
        $fotoExercicio = 'exercicio/' . $arquivo['name']; //exercicio/corrida.png
    } else {
        throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
    }

    require_once('class/exercicio.php');

    $exercicio = new ExercicioClass();

    $exercicio->nomeExercicio = $nomeExercicio;
    $exercicio->descricaoExercicio = $descricaoExercicio;
    $exercicio->grupoMuscular = $grupoMuscular;
    $exercicio->statusExercicio = $statusExercicio;
    $exercicio->fotoExercicio = $fotoExercicio;
    $exercicio->linkExercicio = $linkExercicio;

    $exercicio->Cadastrar();
}

?>

<div class="estruturaCadExercicio">



    <form action="index.php?p=exercicios&e=cadastrar" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto:</label>
            <input class="form-control" type="file" name="fotoExercicio" id="fotoExercicio">
        </div>
        <div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do exercício:</label>
                <input type="text" name="nomeExercicio" id="nomeExercicio" placeholder="Informe o nome:" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="descricaoExercicio">
                <textarea name="descricaoExercicio" id="descricaoExercicio" cols="35" rows="7" placeholder="Descrição"></textarea>
            </div>
        </div>
        <div>
            <select class="form-select form-select-lg mb-3" name="grupoMuscularExercicio" aria-label="Large select example">
                <option selected>Qual o grupo muscular?</option>
                <option value="Peito">Peito</option>
                <option value="Pernas">Pernas</option>
                <option value="Braços">Braços</option>
                <option value="Abdômen">Abdômen</option>
                <option value="Cardio">Cardio</option>
            </select>
        </div>
        <div>
            <div class="statusLink">
                <div class="status">
                    <div class="form-check">
                        <h2>Status</h2>
                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" value="ATIVO" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" value="INATIVO">
                        <label class="form-check-label" for="exampleRadios2">
                            Inativo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" value="DESATIVADO">
                        <label class="form-check-label" for="exampleRadios2">
                            Desativado
                        </label>
                    </div>
                </div>
                <div class="link">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Link:</label>
                        <input type="link" name="linkExercicio" id="linkExercicio" placeholder="Informe o link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                </div>
            </div>

            <div class="botaoInfo">
                <button type="submit" class="btn btn-primary">Cadastrar informações</button>
            </div>
    </form>
</div>