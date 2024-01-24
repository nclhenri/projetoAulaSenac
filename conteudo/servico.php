<section class="servicos wow animate__animated animate__fadeInUp"> 
            <h2>Serviços</h2>
            <div class="cardServicos">
                
                <div class="site servico1">
                    <?php 
                        $listaRand = array_rand($lista, min(3, count($lista)));
                        foreach ($listaRand as $key) : { $linha = $lista[$key]; }
                    ?>

                    <h2><?php echo $linha['nomeExercicio']?></h2>
                    <div>
                        <img src="<?php echo 'img/' . $linha['fotoExercicio']?>" alt="">
                    </div>
                    <div class="descricaoServ">
                        <p><?php echo $linha['descricaoExercicio']?></p>
                        <!-- <img src="./img/descServico.png" alt=""> -->
                    </div>
                    <button>Conheça</button>
                </div>

                <div class="site servico1">
                    <h2>Musculação</h2>
                    <div>
                        <img src="./img/musculacao.png" alt="">
                    </div>
                    <div class="descricaoServ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati atque voluptas quos
                            repudiandae vel optio, assumenda facilis, dolor quibusdam quam pariatur officia, facere
                            repellendus minus aperiam et esse nam suscipit.</p>
                        <!-- <img src="./img/descServico.png" alt=""> -->
                    </div>
                    <button>Conheça</button>
                </div>

                <div class="site servico1">
                    <h2>Dança</h2>
                    <div>
                        <img src="./img/danca.png" alt="">
                    </div>
                    <div class="descricaoServ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati atque voluptas quos
                            repudiandae vel optio, assumenda facilis, dolor quibusdam quam pariatur officia, facere
                            repellendus minus aperiam et esse nam suscipit.</p>
                        <!-- <img src="./img/descServico.png" alt=""> -->
                    </div>
                    <button>Conheça</button>
                </div>
            </div>
</section>