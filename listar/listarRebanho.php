<?php $res_consulta = execute_query("SELECT * FROM `tb_rebanho`"); ?>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Código Fazendeiro</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $dados) : ?>
        <tr>
            <td><?php echo $dados['CD_CODIGO']; ?></td>
            <td><?php echo $dados['CD_FAZENDEIRO']; ?></td>
            <td style="width: 150px;">
                <a title="Alterar" href="rebanho.php?id=<?php echo $dados['CD_CODIGO']; ?>"><i class="material-icons">create</i></a>
                <a title="Deletar" href="sistema/apagar.php?id=<?php echo $dados['CD_CODIGO'];?>&tipo=tb_rebanho"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>
