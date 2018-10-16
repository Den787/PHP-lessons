<?php        //MVC _ структурное архитектурное решение наших приложений (model(обработка данных)<->controller(логика приложений)<->View(вывод данных))
include 'autoloader.php';

use controllers\IndexController;

$controller = new IndexController();

$controller->actionIndex();