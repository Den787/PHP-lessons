<?php
//SINGLETON PATTERN "Одиночка" - объект всегда будет один!

namespace models\patterns;

class DBConnection
{
    private static $_instance = null; //static - переменная одна на весь класс

    private $_port = null; //option field

    private function __construct(){} //не дает создать объект через new(кроме данного класса)
    private function __clone(){}     //ограничиваем
    private function __wakeup(){}    //ограничиваем


    static public function getInstance() {
        if (is_null(self::$_instance))
        {
            self::$_instance = new self(); //создаем себя через конструктор
        }
        return self::$_instance;
    }


//============================================================
    public function setPort($port){  ////// для наглядности
        $this->_port = $port;
    }

    public function getPort(){
        return $this->_port;
    }
}