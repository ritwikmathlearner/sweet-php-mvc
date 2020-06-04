<?php
require '../app/models/Model.php';

class Issue {
    private $model;
    public $tableName = 'issues';

    public function __construct()
    {
        $this->model = new Model;
    }

    public function getAllIssues()
    {
        return $this->model->getAll();
    }

    public function getSingleIssue($id)
    {
        return $this->model->getSingleById($id);
    }
}