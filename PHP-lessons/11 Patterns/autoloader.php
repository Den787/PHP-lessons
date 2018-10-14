<?php

function autoloader($class) {    //заменяет ручное подключение
    //  echo $class; //для проверки
    // exit;
    $class = str_replace( '\\','/',$class . '.php'); // \\ - экранирование
    if (file_exists($class)) {
        //require_once $class . '.php';
        require_once $class; //более универсальный метод
    }

}

spl_autoload_register('autoloader');