<?php
    $res_consulta = ("SELECT * FROM `tb_gado`");
?>
<table style="font-size: 0.8rem; text-align: center;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Rebanho</th>
            <th>Preço</th>
            <th>Pai</th>
            <th>Mãe</th>
            <th>Sexo</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody">
        <?php foreach($res_consulta as $dados) : ?>
        <tr style="font-size: 12px;">
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['dataNasc']; ?></td>
            <td><?php echo $dados['rebanho']; ?></td>
            <td><?php echo $dados['preco']; ?></td>
            <td><?php echo $dados['pai']; ?></td>
            <td><?php echo $dados['mae']; ?></td>
            <td><?php echo $dados['sexo']; ?></td>
            <td style="width: 150px;">
                <a href="apagar.php">Excluir</a>
                <a href="gado.html?id=<?php echo $dados['criador']; ?>">Alterar</a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>