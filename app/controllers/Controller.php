<?php


abstract class Controller {
    static function loadView($fileName, $data = null)
    {
        require "../app/views/{$fileName}.php";
    }
}