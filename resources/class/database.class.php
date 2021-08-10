<?php

class Database {
    private $host = "localhost";
    private $dbname = "cd_overview";
    private $username = "root";
    private $password = "";

    protected function connect() {
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
        $options = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES      => false
        ];

        try {
            $pdo = new PDO($dsn, $this->username, $this->password, $options);
        } 
        catch (\PDOException $e) {
            throw new \PDOException($e->getMessage());
        }

        return $pdo;
    }
}