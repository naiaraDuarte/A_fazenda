<?php $res_consulta = execute_query("SELECT * FROM `tb_coleta_leite`"); ?>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Criador</th>
            <th>Data de Coleta</th>
            <th>Gado Leiteiro</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $dados) : ?>
        <tr>
            <td><?php echo $dados['CD_CODIGO']; ?></td>
            <td><?php echo $dados['CD_CRIADOR']; ?></td>
            <td><?php echo $dados['DT_COLETA']; ?></td>
            <td><?php echo $dados['CD_GADO_LEITEIRO']; ?></td>
            <td style="width: 150px;">
                <a title="Alterar" href="coletaLeite.php?id=<?php echo $dados['CD_CODIGO']; ?>"><i class="material-icons">create</i></a>
                <a title="Deletar" href="sistema/apagar.php?id=<?php echo $dados['CD_CODIGO'];?>&tipo=tb_coleta_leite"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>
