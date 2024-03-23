<?php
function getConexao()
{
    $host = '127.0.0.1'; // No Docker, usamos 'localhost' porque a conexão é interna ao contêiner
    $port = '3306'; // Porta mapeada do host para o contêiner MySQL
    $db = 'curso_php_basico'; // Nome do seu banco de dados
    $user = 'root'; // Seu usuário MySQL
    $pass = 'Senha123'; // Sua senha MySQL
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset"; // Adicionado charset ao DSN
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
