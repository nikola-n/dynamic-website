<?php

namespace Database;

use PDO;

class DbConnection {

    private $connection;

    public function __construct()
    {
        try {
            $host = 'localhost';
            $username = 'root';
            $password = 'root';
            $dbName = 'Challenge15 PDO';
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $this->connection = new PDO("mysql:host=$host;dbname=$dbName", $username, $password, $options);
        }catch (\PDOException $e)
        {
            $e->getMessage();
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

