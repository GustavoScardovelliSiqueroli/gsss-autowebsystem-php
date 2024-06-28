<?php

function after ($string, $inthat)
{
    if (!is_bool(strpos($inthat, $string)))
    return substr($inthat, strpos($inthat,$string)+strlen($string));
};

$request = $_SERVER['REQUEST_URI'];
$resourceDir = '/../src/resources/templates/';

// print_r($_SERVER);

// foreach ($_SERVER as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }
// print_r($request);
 $request = after('/',(after('/',$request)));
//  print_r($request);
 // print_r(substr($request,));
 $index = new IndexView();
switch ($request) {
    case '':
    case '/':
        foreach (get_class_methods($index) as $key => $value) {
            if ($value == 'index') {
                include dirname(__FILE__) . $resourceDir . $index->{get_class_methods($index)[$key]}();
            }
        }
        break;

        default:
            http_response_code(404);
            // require __DIR__ . $resourceDir . '404.php';
}
