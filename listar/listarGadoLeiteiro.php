<?php
    include '../sistema/database.php';
    $res_consulta = execute_query("SELECT * FROM `tb_gado_leiteiro`");
?>
<table style="font-size: 0.8rem; text-align: center;">
    <thead>
        <tr>
            <th>Gado</th>
            <th>Criador</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody">
        <?php foreach($res_consulta as $dados) : ?>
        <tr style="font-size: 12px;">
            <td><?php echo $dados['gado']; ?></td>
            <td><?php echo $dados['criador']; ?></td>
            <td style="width: 150px;">
                <a href="apagar.php">Excluir</a>
                <a href="gadoLeiteiro.html?id=<?php echo $dados['gado']; ?>">Alterar</a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>