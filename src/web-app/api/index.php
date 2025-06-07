<?php

require_once "../core/database.php";

$rota = $_SERVER['REQUEST_URI'];


if ($rota == "/web-app/api/test-conection/") {
    $db = new Database();
    $conexao = $db->getConnection();
    // Verifica se a conexão foi bem-sucedida
    if (!$conexao) {
        die("Falha na conexão com o banco de dados."); // Assumindo que você tem um método para pegar o erro
    } else {
        echo "Conexão com o banco de dados estabelecida com sucesso!";
    }

} else {
    // Rota não encontrada
    echo "Rota não encontrada";
}
