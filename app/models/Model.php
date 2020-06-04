<?php
require '../app/Database.php';

class Model {
    private $db;
    private $stmt;

    public function __construct()
    {
        $database = new Database;
        $this->db = $database->connect();
    }

    public function getAll()
    {
        $trace = debug_backtrace();
        $tableName = $trace[1]["object"]->tableName;
        $this->stmt = $this->db->query("SELECT * FROM {$tableName}");
        return $this->stmt->fetchAll();
    }

    public function getSingleById($id)
    {
        $trace = debug_backtrace();
        $tableName = $trace[1]["object"]->tableName;
        $this->stmt = $this->db->prepare("SELECT * FROM {$tableName} WHERE id = ?");
        $this->stmt->execute([$id]);
        return $this->stmt->fetch();
    }

    public function query($sql)
    {
        $this->stmt = $this->db->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function getMany()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function getOne()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    public function hasValue()
    {
        return $this->stmt->rowCount();
    }

}