<?php
//SINGLETON PATTERN

namespace models\patterns;

class DBConnection
{
    private static $_instance = null;

    private $_port = null; //option field

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    static public function getInstance() {
        if (is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function setPort($port){
        $this->_port = $port;
    }

    public function getPort(){
        return $this->_port;
    }
}