<?php
    $res_consulta = ("SELECT * FROM `tb_coleta_leite`");
?>
<table style="font-size: 0.8rem; text-align: center;">
    <thead>
        <tr>
            <th>Criador</th>
            <th>Coleta</th>
            <th>Gado Leiteiro</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody">
        <?php foreach($res_consulta as $dados) : ?>
        <tr style="font-size: 12px;">
            <td><?php echo $dados['criador']; ?></td>
            <td><?php echo $dados['coleta']; ?></td>
            <td><?php echo $dados['gadoLeiteiro']; ?></td>
            <td style="width: 150px;">
                <a href="apagar.php">Excluir</a>
                <a href="coletaLeite.html?id=<?php echo $dados['criador']; ?>">Alterar</a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>