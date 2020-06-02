<?php


class IssueController {
    public function index()
    {
        echo 'Show all issues';
    }

    public function show($id){
        echo 'Show issue with id: '. $id;
    }

    public function edit($id){
        echo 'Edit issue with id: '.$id;
    }

    public function delete($id){
        echo 'Delete issue with id: '.$id;
    }

}