<?php
require_once 'Controller.php';

class HomeController extends Controller {
    public function index()
    {
        echo 'Loaded home index';
        HomeController::loadView('index');
    }

    public function about()
    {
        $data = 'About Page';
        HomeController::loadView('about', $data);
    }
}