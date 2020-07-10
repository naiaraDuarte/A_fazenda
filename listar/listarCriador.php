<?php $res_consulta = execute_query("SELECT * FROM `tb_criador`"); ?>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Endereço</th>
            <th>Salário</th>
            <th>Sexo</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($res_consulta as $dados) : ?>
        <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['dataNasc'] ?></td>
            <td><?php echo $dados['cpf'] ?></td>
            <td><?php echo $dados['rg'] ?></td>
            <td><?php echo $dados['endereco'] ?></td>
            <td><?php echo $dados['salario'] ?></td>
            <td><?php echo $dados['sexo'] ?></td>
            <td style="width: 150px;">
                <a href="apagar.php">Excluir</a>
                <a href="criador.html?id=<?php echo $dados['nome']; ?>">Alterar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>