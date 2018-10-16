<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2018
 * Time: 9:58
 */

namespace controllers;
use views\View;

class BaseController
{
    protected function render($viewPath, array $params)
    {
        new View($viewPath, $params);
    }

}