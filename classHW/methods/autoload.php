<?php
// автоматическая загрузка классов из папки src и methods
spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../src/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});