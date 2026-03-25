<?php

class Database
{
    private $connection;

    public function __construct($config, $user = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        try {
            $this->connection = new PDO($dsn, $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, /// shows the error properly
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //fetch result as assoc array
                PDO::ATTR_EMULATE_PREPARES => false, // use real prepared statement
            ]);
        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}
