<?php
require 'routes.php';
require 'config.php';

class Core {
    private $uri;
    private $controller;
    private $method;
    private $params = [];

    public function __construct()
    {
        $this->uri = trim(str_replace('sweet-php-mvc', '', trim($_SERVER['REQUEST_URI'], '/')), '/');
    }

    public function checkRouteExists($routes)
    {
        $uriArr = explode('/', $this->uri);
        var_dump($this->uri);
        $containsID = is_numeric(end($uriArr));
        if ( ! $containsID) {
            foreach ($routes as $key => $value) {
                if ($this->uri === $key) {
                    $path = explode('/', $value);
                    if (isset($path[0])) {
                        $this->controller = $path[0];
                    }
                    if (isset($path[1])) {
                        $this->method = $path[1];
                    }
                }
            }
        } else {
            $this->params = array(array_pop($uriArr));
            foreach ($routes as $key => $value) {
                if (strpos($key, 'id') !== false) {
                    $path = implode("/", $uriArr);
                    $shortenPath = str_replace('/id', '', $key);
                    $keyPath = explode('/', $shortenPath);
                    if ($path === $shortenPath) {
                        $path = explode('/', $value);
                        if (isset($path[0])) {
                            $this->controller = $path[0];
                        }
                        if (isset($path[1])) {
                            $this->method = $path[1];
                        }
                    }
                }
            }
        }
        if (empty($this->controller)) {
            require_once 'views/errors/404.php';
            return false;
        } else {
            return true;
        }
    }

    public function executeController()
    {
        require_once "controllers/{$this->controller}.php";
        $instance = new $this->controller;
        call_user_func_array(array($instance, $this->method), $this->params);
    }
}

$c = new Core;
if ($c->checkRouteExists($routes)) {
    $c->executeController();
}
