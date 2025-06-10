<?php

require_once __DIR__ . '/../core/database.php';

class TestConnectionController
{
    public function test()
    {
        $db = new Database();
        $conn = $db->getConnection();
        if ($conn) {
            echo "Conexão com o banco de dados estabelecida com sucesso!";
        } else {
            echo "Falha na conexão com o banco de dados.";
        }
    }
}