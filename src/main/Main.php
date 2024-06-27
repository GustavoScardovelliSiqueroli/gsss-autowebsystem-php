<?php
spl_autoload_register(function ($class) {
       if (file_exists('src/main/views/' . $class . '.php')) {
              require_once 'src/main/views/' . $class . '.php';
       }
});

$index = new IndexView();

foreach(get_class_methods($index) as $key => $value){
 if($value == 'index'){
        include dirname(__FILE__).'/../resources/templates/' . $index->{get_class_methods($index)[$key]}();
 }
 
}

