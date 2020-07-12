<?php include 'database.php';

    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING);

    // FUNCIONANDO
    if($tipo == 'tb_coleta_leite') {
        $cd_criador = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $data_coleta = filter_input(INPUT_POST, 'coleta', FILTER_SANITIZE_STRING);
        $cd_gado_leiteiro = filter_input(INPUT_POST, 'gado', FILTER_SANITIZE_STRING);   
        
        if($id == NULL) {
            $sql = sprintf("INSERT INTO `tb_coleta_leite` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES ('%s','%s','%s')", $cd_criador, $data_coleta, $cd_gado_leiteiro);
            execute($sql);
            echo '<h1>Cadastrar novo item</h1>';
            header('Location: ../coletaLeite.php');
        } 
        else{
            $sql = sprintf("UPDATE `tb_coleta_leite` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE `CD_CODIGO` = '%s'", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
            execute($sql);
            header('Location: ../coletaLeite.php');
        }
    }

    // FUNCIONANDO
    if($tipo == 'tb_criador') {
        $nm_nome = filter_input(INPUT_POST, 'nm_nome', FILTER_SANITIZE_STRING);
        $dt_nasc = filter_input(INPUT_POST, 'dt_nasc', FILTER_SANITIZE_STRING);
        $nm_cpf = filter_input(INPUT_POST, 'nm_cpf', FILTER_SANITIZE_STRING);
        $nm_rg = filter_input(INPUT_POST, 'nm_rg', FILTER_SANITIZE_STRING);
        $nm_sexo = filter_input(INPUT_POST, 'nm_sexo', FILTER_SANITIZE_STRING);
        $nm_endereco = filter_input(INPUT_POST, 'nm_endereco', FILTER_SANITIZE_STRING);
        $vl_salario = filter_input(INPUT_POST, 'vl_salario', FILTER_SANITIZE_STRING);
        
        echo $tipo . '<br>';
        echo $nm_nome . '<br>';
        echo $dt_nasc . '<br>';
        echo $nm_cpf . '<br>';
        echo $nm_rg . '<br>';
        echo $nm_sexo . '<br>';
        echo $nm_endereco . '<br>';
        echo $vl_salario . '<br>';

        if($id == NULL) {
            $sql = sprintf("INSERT INTO `tb_criador`(`NM_NOME`, `DT_NASC`, `NM_CPF`, `NM_RG`, `NM_SEXO`, `NM_ENDERECO`, `VL_SALARIO`) VALUES ('%s','%s','%s','%s','%s','%s','%s')", $nm_nome, $dt_nasc, $nm_cpf, $nm_rg, $nm_sexo, $nm_endereco, $vl_salario);
            execute($sql);
            header('Location: ../criador.php');
        }
        else {
             $sql = sprintf("UPDATE `tb_criador` SET `NM_NOME`= '%s',`DT_NASC`= '%s',`NM_CPF`= '%s',`NM_RG`= '%s',`NM_SEXO`= '%s',`NM_ENDERECO`= '%s',`VL_SALARIO`= '%s' WHERE `CD_CODIGO` = '%s'", $nm_nome, $dt_nasc, $nm_cpf, $nm_rg, $nm_sexo, $nm_endereco, $vl_salario, $id);
             execute($sql);
             header('Location: ../criador.php');
        }
    }

    // FUNCIONANDO

    if($tipo == 'tb_fazendeiro') {
        $nm_nome = filter_input(INPUT_POST, 'nm_nome', FILTER_SANITIZE_STRING);
        $dt_nasc = filter_input(INPUT_POST, 'dt_nasc', FILTER_SANITIZE_STRING);
        $nm_cpf = filter_input(INPUT_POST, 'nm_cpf', FILTER_SANITIZE_STRING);
        $nm_rg = filter_input(INPUT_POST, 'nm_rg', FILTER_SANITIZE_STRING);
        $nm_sexo = filter_input(INPUT_POST, 'nm_sexo', FILTER_SANITIZE_STRING);
        $nm_endereco = filter_input(INPUT_POST, 'nm_endereco', FILTER_SANITIZE_STRING);
           

        if($id == NULL) {
            $sql = sprintf("INSERT INTO `tb_fazendeiro` (`NM_NOME`, `DT_NASC`, `NM_CPF`, `NM_RG`, `NM_SEXO`, 'NM_ENDERECO') VALUES ('%s','%s','%s','%s','%s','%s')", $nm_nome, $dt_nasc, $nm_cpf, $nm_rg, $nm_sexo, $nm_endereco);
             execute($sql);
             header('Location: ../fazendeiro.php');
         } 
        else{
            $sql = sprintf("UPDATE `tb_fazendeiro` SET `NM_NOME`= '%s',`DT_NASC`= '%s' ,`NM_CPF`= '%s',`NM_RG`= '%s',`NM_SEXO`= '%s','NM_ENDERECO'='%s', WHERE '%s'", $nm_nome, $dt_nasc, $nm_cpf, $nm_rg, $nm_sexo, $nm_endereco, $id);
             execute($sql);
             header('Location: ../fazendeiro.php');
        }
    }
    // FUNCIONANDO
    if($tipo == 'tb_gado') {
        $cd_rebanho = filter_input(INPUT_POST, 'cd_rebanho', FILTER_SANITIZE_STRING);
        $nm_nome = filter_input(INPUT_POST, 'nm_nome', FILTER_SANITIZE_STRING);
        $dt_nasc = filter_input(INPUT_POST, 'dt_nasc', FILTER_SANITIZE_STRING);
        $nm_sexo = filter_input(INPUT_POST, 'nm_sexo', FILTER_SANITIZE_STRING);
        $cd_pai = filter_input(INPUT_POST, 'cd_pai', FILTER_SANITIZE_STRING);
        $cd_mae = filter_input(INPUT_POST, 'cd_mae', FILTER_SANITIZE_STRING);         
        $vl_preco = filter_input(INPUT_POST, 'vl_preco', FILTER_SANITIZE_STRING);
       

        if($id == NULL) {
            $sql = sprintf("INSERT INTO `tb_gado` (`CD_REBANHO`, `NM_NOME`, `DT_NASC`, `NM_SEXO`, `CD_PAI`, `CD_MAE`, `VL_PRECO`) VALUES ('%s','%s','%s','%s','%s','%s','%s')", $cd_rebanho ,$nm_nome, $dt_nasc, $nm_sexo, $cd_pai, $cd_mae, $vl_preco );
            execute($sql);
            header('Location: ../gado.php');
         } 
        else{
            $sql = sprintf("UPDATE `tb_gado` SET `CD_REBANHO`= '%s',`NM_NOME`= '%s',`DT_NASC`= '%s',`NM_SEXO`= '%s',`CD_PAI`= '%s',`CD_MAE`= '%s',`VL_PRECO`= '%s' WHERE `CD_CODIGO` = '%s'", $cd_rebanho, $nm_nome, $dt_nasc, $nm_sexo, $cd_pai, $cd_mae, $vl_preco, $id);            
            execute($sql);
            header('Location: ../gado.php');
        }

    }
    // FUNCIONANDO
    if($tipo == 'tb_gado_leiteiro') {
        $cd_criador = filter_input(INPUT_POST, 'cd_criador', FILTER_SANITIZE_STRING);
        $cd_gado = filter_input(INPUT_POST, 'cd_gado', FILTER_SANITIZE_STRING);

        if($id == NULL) {
             $sql = sprintf("INSERT INTO `tb_gado_leiteiro` (`CD_CRIADOR`,`CD_GADO`) VALUES ('%s','%s')", $cd_criador, $cd_gado);
             execute($sql);
             header('Location: ../gadoLeiteiro.php');
        } 
        else{
             $sql = sprintf("UPDATE `tb_gado_leiteiro` SET `CD_CRIADOR`= '%s',`CD_GADO`= '%s' WHERE `CD_CODIGO` = '%s'", $cd_criador, $cd_gado, $id);
             execute($sql);
             header('Location: ../gadoLeiteiro.php');
        }
    }
    // FUNCIONANDO
    if($tipo == 'tb_rebanho') {
        $cd_fazendeiro = filter_input(INPUT_POST, 'cd_fazendeiro', FILTER_SANITIZE_STRING);
        
        if($id == NULL) {
             $sql = sprintf("INSERT INTO `tb_rebanho` (`CD_FAZENDEIRO`) VALUES ('%s')", $cd_fazendeiro);
             execute($sql);
             header('Location: ../rebanho.php');

        } 
        else{
            $sql = sprintf("UPDATE `tb_rebanho` SET `CD_FAZENDEIRO`= '%s' WHERE `CD_CODIGO` = '%s'", $cd_fazendeiro, $id);
            execute($sql);
            header('Location: ../rebanho.php');
        }
    }
?>