<?php
require 'Controller.php';

class IssueController extends Controller {
    public function index()
    {
        $pdo = IssueController::loadModel('Issue');
        $issues = $pdo->getAllIssues();
        $data = [
            "issues" => $issues
        ];
        IssueController::loadView('issues/index', $data);
    }

    public function show($id)
    {
        $pdo = IssueController::loadModel('Issue');
        $issue = $pdo->getSingleIssue($id);
        $data = [
            "issue" => $issue
        ];
        IssueController::loadView('issues/show', $data);
    }

    public function insert()
    {
        echo 'Open page to insert issue';
    }

    public function store()
    {
        echo 'Run issue store process';
    }

    public function edit($id)
    {
        echo 'Edit issue with id: ' . $id;
    }

    public function delete($id)
    {
        echo 'Delete issue with id: ' . $id;
    }

    public function update()
    {
        echo 'Run issue update process';
    }
}