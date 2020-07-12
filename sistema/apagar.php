<?php
    include 'database.php';
    $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);


    if($tipo == 'tb_coleta' || $tipo == 'tb_rebanho' || $tipo == 'tb_gado' || $tipo == 'tb_fazendeiro' || $tipo == 'tb_gado_leiteiro' || $tipo == 'tb_criador'){
        $sql = "DELETE FROM `$tipo` WHERE `CD_CODIGO` = $id";
        execute($sql);
    } else {
        die('Tipo inválido');
    }

   
    header('Location: coletaLeite.php');
    
    exit;
?>