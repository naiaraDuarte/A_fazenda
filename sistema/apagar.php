<?php
    include 'database.php';
    $tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

    $tabelas_permitidas = array('tb_coleta_leite', 'tb_rebanho', 'tb_gado', 'tb_fazendeiro', 'tb_gado_leiteiro', 'tb_criador');
    $paginas = array(
        'tb_coleta_leite' => 'coletaLeite.php',
        'tb_rebanho' => 'rebanho.php',
        'tb_gado' => 'gado.php',
        'tb_fazendeiro' => 'fazendeiro.php',
        'tb_gado_leiteiro' => 'gadoLeiteiro.php',
        'tb_criador' => 'criador.php');

    foreach ($tabelas_permitidas as $tabela) {
        if($tipo == $tabela){
            $sql = "DELETE FROM `$tipo` WHERE `CD_CODIGO` = $id";
            execute($sql);
            header(sprintf("Location: ../%s", $paginas[$tabela]));
            break;
        }
    }

die('Tipo inválido');
exit;
?>