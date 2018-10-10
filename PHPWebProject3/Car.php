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
    private $brand;
    protected $color;
    public $maxSpeed;
    public $currentSpeed =0;

    const MAX_LIFTING_CAPASITY = 630;

 //   public static $_counterofCars =0;

   public function __construct($brand, $color = 'Black' , $maxSpeed = 500){
        $this->brand =$brand;
        $this->color=$color;
        $this->maxSpeed = $maxSpeed;
     //   self::$_counterofCars++;
    }

    /*public function __destruct(){
        self::$_counterofCars--;
        echo self::$_counterofCars;
    }
    */
    public static function getCarWithRandomMaxSpeed(){
        return new Car('Honda', 'Green', rand(200,300));
    }
    
    public function move($speed) {
        $this->currentSpeed = $speed;
    }
    public function stop(){
        $this->currentSpeed = 0;
    }


}