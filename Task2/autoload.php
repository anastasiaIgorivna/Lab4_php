<?php

spl_autoload_register(function ($className) {
    $folders = ['Models', 'Controllers', 'Views'];
    
    foreach ($folders as $folder) {
        $path = __DIR__ . "/$folder/$className.php";
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});
