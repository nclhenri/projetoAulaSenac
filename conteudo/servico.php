<section class="servicos wow animate__animated animate__fadeInUp">
    <h2>Serviços</h2>
    <div class="cardServicos">
        <?php 
            $listaRand = array_rand($lista, min(3, count($lista)));
            foreach($listaRand as $key) : {$linha = $lista[$key];}
        ?>
            <h2><?php echo $linha['nomeExercicio']?></h2>
        <div>
            <img src="<?php echo 'img/' .$linha['fotoExercicio'] ?>" alt="">
        </div>

        <div class="descricaoServ">
            <p><?php echo $linha ['descricaoExercicio'] ?></p>
        </div>
        <button>Conheça</button>
        <?php endforeach; ?>
    </div>
</section>