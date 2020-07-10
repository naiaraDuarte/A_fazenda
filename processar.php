<?php include 'sistema/database.php';

    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    echo $tipo;
    $id = filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING);

    if($tipo == 'tb_coleta_leite') {
        $cd_criador = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $data_coleta = filter_input(INPUT_POST, 'coleta', FILTER_SANITIZE_STRING);
        $cd_gado_leiteiro = filter_input(INPUT_POST, 'gado', FILTER_SANITIZE_STRING);
        echo $cd_criador;
        echo $data_coleta;
        echo $cd_gado_leiteiro;
        echo $id;   

        if($id == NULL) {
            $sql = sprintf("INSERT INTO `tb_coleta_leite` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES ('%s','%s','%s')", $cd_criador, $data_coleta, $cd_gado_leiteiro);
            execute($sql);
            echo '<h1>Cadastrar novo item</h1>';
            header('Location: /vaca/coletaLeite.php');
        } 
        else{
            $sql = sprintf("UPDATE `tb_coleta_leite` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE `CD_CODIGO` = '%s'", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
            execute($sql);
            header('Location: /vaca/coletaLeite.php');
        }
    }
    if($tipo == 'tb_criador') {
        // $cd_criador = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $data_coleta = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $cd_gado_leiteiro = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

        // if($id == NULL) {
        //     $sql = sprintf("INSERT INTO `tb_criador` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES (%s,%s,%s)", $cd_criador, $data_coleta, $cd_gado_leiteiro);
        //     execute_query($sql);
        // } 
        // else{
        //     $sql = sprintf("UPDATE `tb_criador` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE %s", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
        //     execute_query($sql);
        // }
    }
    if($tipo == 'tb_fazendeiro') {
        // $cd_criador = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $data_coleta = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $cd_gado_leiteiro = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

        // if($id == NULL) {
        //     $sql = sprintf("INSERT INTO `tb_fazendeiro` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES (%s,%s,%s)", $cd_criador, $data_coleta, $cd_gado_leiteiro);
        //     execute_query($sql);
        // } 
        // else{
        //     $sql = sprintf("UPDATE `tb_fazendeiro` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE %s", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
        //     execute_query($sql);
        // }
    }
    if($tipo == 'tb_gado') {
        // $cd_criador = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $data_coleta = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $cd_gado_leiteiro = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

        // if($id == NULL) {
        //     $sql = sprintf("INSERT INTO `tb_gado` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES (%s,%s,%s)", $cd_criador, $data_coleta, $cd_gado_leiteiro);
        //     execute_query($sql);
        // } 
        // else{
        //     $sql = sprintf("UPDATE `tb_gado` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE %s", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
        //     execute_query($sql);
        // }
    }
    if($tipo == 'tb_gado_leiteiro') {
        // $cd_criador = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $data_coleta = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $cd_gado_leiteiro = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

        // if($id == NULL) {
        //     $sql = sprintf("INSERT INTO `tb_gado_leiteiro` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES (%s,%s,%s)", $cd_criador, $data_coleta, $cd_gado_leiteiro);
        //     execute_query($sql);
        // } 
        // else{
        //     $sql = sprintf("UPDATE `tb_gado_leiteiro` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE %s", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
        //     execute_query($sql);
        // }
    }
    if($tipo == 'tb_rebanho') {
        // $cd_criador = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $data_coleta = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
        // $cd_gado_leiteiro = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

        // if($id == NULL) {
        //     $sql = sprintf("INSERT INTO `tb_coleta_leite` (`CD_CRIADOR`, `DT_COLETA`, `CD_GADO_LEITEIRO`) VALUES (%s,%s,%s)", $cd_criador, $data_coleta, $cd_gado_leiteiro);
        //     execute_query($sql);
        // } 
        // else{
        //     $sql = sprintf("UPDATE `tb_coleta_leite` SET `CD_CRIADOR`= '%s',`DT_COLETA`= '%s' ,`CD_GADO_LEITEIRO`= '%s' WHERE %s", $cd_criador, $data_coleta, $cd_gado_leiteiro, $id);
        //     execute_query($sql);
        // }
    }
?>