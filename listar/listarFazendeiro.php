<?php $res_consulta = execute_query("SELECT * FROM `tb_fazendeiro`");?>
<table style="font-size:0.8rem; text-align: center;">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $dados) : ?>
        <tr style="font-size: 12px;">
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['dataNasc'] ?></td>
            <td><?php echo $dados['cpf'] ?></td>
            <td><?php echo $dados['rg'] ?></td>
            <td><?php echo $dados['endereco'] ?></td>
            <td><?php echo $dados['sexo'] ?></td>
            <td style="width: 150px;">
                <a href="apagar.php">Excluir</a>
                <a href="fazendeiro.html?id=<?php echo $dados['nome']; ?>">Alterar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>