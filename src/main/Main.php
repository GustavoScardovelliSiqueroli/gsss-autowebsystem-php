<?php
spl_autoload_register(function ($class) {
       if (file_exists('src/main/controllers/' . $class . '.php')) {
              require_once 'src/main/controllers/' . $class . '.php';
       }
});

$testControllerFunction = new TestController();

echo ($testControllerFunction->{get_class_methods($testControllerFunction)[0]}());


