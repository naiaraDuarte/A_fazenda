<?php $res_consulta = execute_query("SELECT * FROM `tb_fazendeiro`");?>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Data Nascimento</th>
            <th>Numero CPF</th>
            <th>Numero RG</th>
            <th>Sexo</th>
            <th>Endereço</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $dados) : ?>
        <tr>
            <td><?php echo $dados['CD_CODIGO']; ?></td>
            <td><?php echo $dados['NM_NOME']; ?></td>
            <td><?php echo $dados['DT_NASC']; ?></td>
            <td><?php echo $dados['NM_CPF']; ?></td>
            <td><?php echo $dados['NM_RG']; ?></td>
            <td><?php echo $dados['NM_SEXO']; ?></td>
            <td><?php echo $dados['NM_ENDERECO']; ?></td>
            <td style="width: 150px;">
                <a title="Alterar" href="fazendeiro.php?id=<?php echo $dados['CD_CODIGO']; ?>"><i class="material-icons">create</i></a>
                <a title="Deletar" href="sistema/apagar.php?id=<?php echo $dados['CD_CODIGO'];?>&tipo=tb_fazendeiro"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>