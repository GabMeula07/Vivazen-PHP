<?php

class Database
{
    private $host = "";
    private $username = "";
    private $db_name = "";
    private $password = "";
    public $conn;

    public function getConnection(): ?PDO
    {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;

        } catch (PDOException $exception) {
            echo "Erro de conexão: " . $exception->getMessage();
            return null;
        }

    }


}


?>