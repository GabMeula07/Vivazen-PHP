<?php

class Database
{
    private $host = "mysql";
    private $username = "vivazen";
    private $db_name = "vivazen_db";
    private $password = "password";
    public $conn;

    public function getConnection(): ?PDO
    {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";port=3306;dbname=" . $this->db_name,
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