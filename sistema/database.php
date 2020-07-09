<?php
    include 'config.php';

    function execute($sql = null) {
        $database = open_database();
        try {
            $database->query($sql);
            echo 'Operacao realizada com sucesso';
        } catch (Exception $e){
            echo 'Nao foi possivel realizar operacao sql:' . $e->getMessage();
        }
        close_database($database);
    }
    function execute_query($sql = null) {
        $database = open_database();
        $found = null;
        try {
            $result = $database->query($sql);
            if($result != null) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
                //echo 'registro localizado com sucesso.';
            }
        }catch(Exception $e) {
            echo '<br>Nao foi possivel realizar esta operacao';
        }
        close_database($database);
        return $found;
    }
    function open_database() {
        try{
           $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
           return $conn;
        } catch (Exception $e) {
            // echo $e->getMessage();
            echo "<br>Nao foi possivel se comunicar com o banco de dados: " . $e->getMessage();
        }
    }
    function close_database($conexao) {
        try {
            mysqli_close($conexao);
        }catch (Exception $e) {
            echo 'Erro ao fechar: ' . $e->getMessage();
        }
    }
?>