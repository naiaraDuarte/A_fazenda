<?php
    include 'config.php';

    class BancoDeDados {
        private $dbName;
        private $password;
        private $user;
        private $conn;

        public function BancoDeDados($dbName, $password, $user){
            $this->$dbName;
            $this->$password;
            $this->$user;

            $this->abrirConexao();
        }
        public function abrirConexao() {
                try{
                   $this->conn = new mysqli('localhost', $this->dbName, $this->password, $this->user);
                } catch (Exception $e) {
                    // echo $e->getMessage();
                    echo "<br>Nao foi possivel se comunicar com o banco de dados: " . $e->getMessage();
            }
        }
        public function fecharConexao() {
            try {
                mysqli_close($this->conn);
            }catch (Exception $e) {
                echo 'Erro ao fechar o banco: ' . $e->getMessage();
            }
        }
        public function execute($sql = null) {
            try {
                $this->conn->query($sql);
                echo 'Operacao realizada com sucesso';
            } catch (Exception $e){
                echo 'Nao foi possivel realizar operacao sql:' . $e->getMessage();
            }
            $this->fecharConexao();
        }
        public function execute_query($sql = null) {
            $found = null;
            try {
                $result = $this->conn->query($sql);
                if($result != null) {
                    $found = $result->fetch_all(MYSQLI_ASSOC);
                    echo 'registro localizado com sucesso.';
                }
            }catch(Exception $e) {
                echo '<br>Nao foi possivel realizar esta operacao';
            }
            $this->fecharConexao();
            return $found;
        }
    }
?>