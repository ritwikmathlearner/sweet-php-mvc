<?php
require 'Controller.php';

class IssueController extends Controller {
    public function index()
    {
        $modelInstance = IssueController::loadModel('Issue');
        $issues = $modelInstance->getAllIssues();
        $data = [
            "issues" => $issues
        ];
        IssueController::loadView('issues/index', $data);
    }

    public function show($id)
    {
        $modelInstance = IssueController::loadModel('Issue');
        $issue = $modelInstance->getSingleIssue($id);
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