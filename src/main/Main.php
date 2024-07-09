<?php
spl_autoload_register(function ($class) {
       if (file_exists('src/main/views/' . $class . '.php')) {
              require_once 'src/main/views/' . $class . '.php';
       }
});

include dirname(__FILE__) . '/../../gsss-package/_GSSSROUTER.php';
