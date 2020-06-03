<?php


abstract class Controller {
    static function loadView($fileName, $data = null)
    {
        require "../app/views/{$fileName}.php";
    }

    static function loadModel($modelName)
    {
        require "../app/models/{$modelName}.php";
        $modelInstance = new $modelName;
        return $modelInstance;
    }
}