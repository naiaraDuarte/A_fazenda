<?php
    include 'database.php';
    $tipo    =  filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);
    $id      =  filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if($tipo=='doca') {
        echo 'dados recebidos';
        echo 'id cargo:'. $id;
    }
    
    $sql = "delete from `$tipo` where id = $id";
    execute($sql);
    echo 'registro excluido com sucesso';
    exit;
?>