<?php $res_consulta = execute_query("SELECT * FROM `tb_gado`"); ?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Rebanho</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Sexo</th>
            <th>Pai</th>
            <th>Mãe</th>
            <th>Preço</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $dados) : ?>
        <tr>
            <td><?php echo $dados['CD_CODIGO']; ?></td>
            <td><?php echo $dados['CD_REBANHO']; ?></td>
            <td><?php echo $dados['NM_NOME']; ?></td>
            <td><?php echo $dados['DT_NASC']; ?></td>
            <td><?php echo $dados['NM_SEXO']; ?></td>
            <td><?php echo $dados['CD_PAI']; ?></td>
            <td><?php echo $dados['CD_MAE']; ?></td>
            <td><?php echo $dados['VL_PRECO']; ?></td>
            <td style="width: 150px;">
            <a title="Alterar" href="rebanho.php?id=<?php echo $dados['CD_CODIGO']; ?>"><i class="material-icons">create</i></a>
                <a title="Deletar" href="sistema/apagar.php?id=<?php echo $dados['CD_CODIGO'];?>&tipo=tb_gado"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>