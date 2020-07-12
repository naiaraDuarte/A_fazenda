<?php $res_consulta = execute_query("SELECT * FROM `tb_criador`"); ?>
<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Numero CPF</th>
            <th>Numero RG</th>
            <th>Sexo</th>
            <th>Endereço</th>
            <th>Salário</th>
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
            <td><?php echo $dados['VL_SALARIO']; ?></td>
            <td style="width: 150px;">
                <a title="Alterar" href="criador.php?id=<?php echo $dados['CD_CODIGO']; ?>"><i class="material-icons">create</i></a>
                <a title="Deletar" href="sistema/apagar.php?id=<?php echo $dados['CD_CODIGO'];?>&tipo=tb_criador"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php  endforeach;?>
    </tbody>
</table>