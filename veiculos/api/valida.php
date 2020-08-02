<?php
    include 'conexao.php';
    class valida extends Database {
        private $connection;

        public function execSQL($sql)
        {
            $this->connection = $this->connect();
            return mysqli_query($this->connection, $sql);
        }
    }

?>