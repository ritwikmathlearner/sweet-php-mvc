<?php
$routes = [
    '' => 'HomeController/index',
    'index' => 'HomeController/index',
    'about' => 'HomeController/about',
    'issue' => 'IssueController/index',
    'issue/id' => 'IssueController/show',
    'issue/edit/id' => 'IssueController/edit',
    'issue/delete/id' => 'IssueController/delete',
    'issue/update' => 'IssueController/update',
];