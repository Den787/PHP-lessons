<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.10.2018
 * Time: 16:32
 */

require_once "interfaces/IMovable.php";
class Ski implements IMovable
{

    private $speed =0;

    public function start()
    {
       // $this->$this->setSpeed(5);
        echo '5';
    }

    public function setSpeed($speed)
    {
        $this->$speed = $speed;
    }

    public function stop()
    {
        $this->setSpeed(0);
    }

    public function getSpeed()
    {
         echo $this->speed;
    }
}