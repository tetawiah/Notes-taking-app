<?php

use Core\Response;

function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
    {
        http_response_code($code);
        require base_path("views/{$code}.php");
        die();
    }

function authorize($condition, $status =Response::FORBIDDEN){
    if(! $condition) {
        abort($status);
    }
}

function base_path(String $path) {
 return BASE_PATH . $path;
}

function view(String $path, $attributes=[]) {
    extract($attributes);
    require BASE_PATH . ('views/' . $path);
}