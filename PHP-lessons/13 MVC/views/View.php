<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2018
 * Time: 10:01
 */

namespace views;

class View
{
    private $viewPath;
    function __construct($viewPath, array $params)
    {
        $this->viewPath = $viewPath;
        $this->view($params);
    }

    public function view(array $params)
    {
        extract($params);
        include $this->viewPath;
    }

}