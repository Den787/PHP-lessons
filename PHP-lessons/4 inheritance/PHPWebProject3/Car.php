<?php

/**
 * Car short summary.
 *
 * Car description.
 *
 * @version 1.0
 * @author user
 */
class Car
{
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed =0;

   public function __construct($brand, $color = 'Black' , $maxSpeed = 500){
        $this->brand =$brand;
        $this->color=$color;
        $this->maxSpeed = $maxSpeed;

    }

    public function move($speed) {
        $this->setSpeed($speed);
    }
    public function stop(){
        $this->setSpeed(0);
    }



}