<?php

function after($string, $inthat)
{
    if (!is_bool(strpos($inthat, $string)))
        return substr($inthat, strpos($inthat, $string) + strlen($string));
};

$request = $_SERVER['REQUEST_URI'];
$resourceDir = '/../src/resources/templates/';
$request = after('/', (after('/', $request)));

$index = new IndexView();
switch ($request) {
    case '':
    case '/':
        foreach (get_class_methods($index) as $key => $value) {
            if ($value == 'index') {
                require dirname(__FILE__) . $resourceDir . $index->{get_class_methods($index)[$key]}();
            }
        }
        break;

    default:
        http_response_code(404);
        require dirname(__FILE__) . '/templates-errors/error-404.html';
}
