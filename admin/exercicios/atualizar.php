<?php

$id = $_GET["id"];
require_once('class/exercicio.php');
$exercicio = new ExercicioClass($id);


if (isset($_POST['nomeExercicio'])) {

    $nomeExercicio = $_POST['nomeExercicio'];
    $descricaoExercicio = $_POST['descricaoExercicio'];
    $grupoMuscularExercicio = $_POST['grupoMuscularExercicio'];
    $statusExercicio = $_POST['statusExercicio'];
    $linkExercicio = $_POST['linkExercicio'];

    $arquivo = $_FILES['fotoExercicio'];

    if ($arquivo['error']) {
        throw new Exception("o error foi: ", $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/exercicio/' . $arquivo['name'])) {
        $fotoExercicio = 'exercicio/' . $arquivo['name']; // exercicio/corrida.png

    } else {
        throw new Exception("o error foi: ", $arquivo['error']);
    }


    require_once('class/exercicio.php');

    $exercicio = new ExercicioClass();

    $exercicio->nomeExercicio = $nomeExercicio;
    $exercicio->descricaoExercicio = $descricaoExercicio;
    $exercicio->grupoMuscularExercicio = $grupoMuscularExercicio;
    $exercicio->statusExercicio = $statusExercicio;
    $exercicio->fotoExercicio = $fotoExercicio;
    $exercicio->linkExercicio = $linkExercicio;

    $exercicio->Atualizar();
}

//print($_POST['nomeExercicio']);
//var_dumST['fp ($_POotoExercicio']);
//var_dump ($_POST['desaocricExercicio']);
//var_dump ($_POST['grupoMuscularExercicio']);
//var_dump ($_POST['statusExercicio']);
//var_dump ($_POST['linkExercicio']);

?>


<h2 class="display-4">Página Atualizar Exercícios</h2>





<form action="index.php?p=exercicios&e=atualizar&id=<?php echo $exercicio->idExercicio ?>" method="POST" enctype="multipart/form-data" class="formulario-exercicio">

    <div class="mb-3">
        <label for="formFile" class="form-label">Foto:</label>
        <input class="form-control" type="file" id="fotoExercicio" name="fotoExercicio">
    </div>


    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeExercicio" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeExercicio" id="nomeExercicio" placeholder="Nome do exercício" value="<?php echo $exercicio->nomeExercicio ?>">
        </div>


        <div class="mb-3">
            <label for="descricaoExercicio" class="form-label">Descrição:</label>
            <input type="text" class="form-control" name="descricaoExercicio" id="descricaoExercicio" value="<?php echo $exercicio->descricaoExercicio ?>">
        </div>


        <div class="row">

            <div class="mb-3">
                <label for="grupoMuscularExercicio" class="form-label">Status:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="grupoMuscularExercicio" required>
                    <option value="<?php echo $exercicio->grupoMuscularExercicio ?>">
                        <?php echo $exercicio->grupoMuscularExercicio ?>
                    </option>
                    <option value="Peito">Peito</option>
                    <option value="Pernas">Pernas</option>
                    <option value="Bracos">Braços</option>
                    <option value="Abdômen">Abdômen</option>
                    <option value="Cardio">Cardio</option>
                </select>

            </div>




            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>


                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                                                                                                                    if ($exercicio->statusExercicio == 'ATIVO') {
                                                                                                                        echo 'checked';
                                                                                                                    }
                                                                                                                    ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Ativo
                        </label>
                    </div>

                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                                                                                                                    if ($exercicio->statusExercicio == 'DESATIVADO') {
                                                                                                                        echo 'checked';
                                                                                                                    }
                                                                                                                    ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Desativado
                        </label>
                    </div>



                    <div class="form-check">

                        <input class="form-check-input" type="radio" name="statusExercicio" id="statusExercicio" <?php
                                                                                                                    if ($exercicio->statusExercicio == 'INATIVO') {
                                                                                                                        echo 'checked';
                                                                                                                    }
                                                                                                                    ?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Inativo
                        </label>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="linkExercicio" class="form-label">Link:</label>
                    <input type="text" class="form-control" id="linkExercicio" name="linkExercicio" placeholder="Link do exercício" value="<?php echo $exercicio->linkExercicio?>">
                </div>

            </fieldset>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Atualizar Exercício</button>
            </div>

        </div>

    </div>

</form>