<?php
require '../app/Database.php';

class Issue {
    private $db;

    public function __construct()
    {
        $database = new Database;
        $this->db = $database->connect();
    }

    /**
     * @return PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    public function getAllIssues()
    {
        $stmt = $this->db->query("SELECT * FROM issues");
        return $stmt->fetchAll();
    }

    public function getSingleIssue($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM issues WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}