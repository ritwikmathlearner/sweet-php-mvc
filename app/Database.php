<?php

class Database {
    private $dbHost, $dbName, $dbUser, $dbPassword, $dsn, $options;
    public function __construct()
    {
        $this->dbHost = DATABASE_HOST;
        $this->dbName= DATABASE_NAME;
        $this->dbPassword = DATABASE_PASSWORD;
        $this->dbUser = DATABASE_USER;
        $this->dsn = "mysql:host=$this->dbHost;dbname=$this->dbName";
        $this->options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    }

    public function connect(){
        try {
            $pdo = new PDO($this->dsn, $this->dbUser, $this->dbPassword, $this->options);
            return $pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}