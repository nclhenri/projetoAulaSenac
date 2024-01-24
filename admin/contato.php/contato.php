<?php 
    require_once('class/contato.php');
    $contato = new ContatoClass();
    $lista = $contato->ListarContato(); // lista é uma matriz de dados

    // var_dump($lista); //exibe tudo que tem dentro da variavel É UM TESTE
?>

<div class="table-resposive">
    <table class="table table-bordered border-primary">
        <caption>Lista de E-mail</caption>
        <thead>
            <tr>
                <th>ID Contato</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Mensagem</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $linha ): ?>
            <tr>
                <td><?php echo $linha['idContato'] ?></td>
                <td><?php echo $linha['nomeContato'] ?></td>
                <td><?php echo $linha['emailContato'] ?></td>
                <td><?php echo $linha['telefoneContato'] ?></td>
                <td><?php echo $linha['mensagemContato'] ?></td>
                <td><?php echo $linha['dataContato'] ?></td>
                <td><?php echo $linha['horaContato'] ?></td>
                <td><?php echo $linha['statusContato'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>