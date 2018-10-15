<?php
//SINGLETON PATTERN "Одиночка" - объект всегда будет один!

namespace models\patterns;

class DBConnection
{
    private static $_instance = null; //static - переменная одна на весь класс
    private static $_connectParams = array(
      '_host'=> 'localhost',
      '_user'=> 'root',
      '_db'=> 'test',
        '_password' =>''

    );

    private function __construct(){} //не дает создать объект через new(кроме данного класса)
    private function __clone(){}     //ограничиваем
    private function __wakeup(){}    //ограничиваем


    static public function getInstance() {
        if (is_null(self::$_instance))
        {
            self::$_instance = new \mysqli();
            self::$_instance->connect(self::$_connectParams['_host'], self::$_connectParams['_user'], self::$_connectParams['_password'], self::$_connectParams['_db']);
        }
        return self::$_instance;
    }



}