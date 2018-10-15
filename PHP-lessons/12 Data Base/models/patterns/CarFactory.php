<?php
//FACTORY PATTERN

namespace models\patterns;
use models\cars\Mitsubishi;
use models\cars\BMW as BMW;


class CarFactory
{
    public function createCar($name) {

        switch ($name) {
            case 'BMW': return new BMW();
            break;
            case 'Mitsubishi': return new Mitsubishi();
            break;
            default:
                return 'Фабрика не может выпустить '.$name;
        }
    }

}