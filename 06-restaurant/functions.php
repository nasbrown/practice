<?php

function dd($value){
    echo '<pre>';

    var_dump($value);

    echo '</pre>';

    die();
};

function abort(){
    http_response_code(404);

    require "views/404.php";

    die();
}

function urlIs($value){
    return $_SERVER["REQUEST_URI"] === $value;
};

function isDataAvailable($var){
    if(isset($var) && !empty($var)){
        return $var;
    } else{
        return $var = 'Please Enter Info';
    }
}