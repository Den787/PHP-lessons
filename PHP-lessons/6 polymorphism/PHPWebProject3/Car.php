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
    private $maxSpeed;
    protected $currentSpeed =0;

    public function __construct($brand, $color = 'Black' , $maxSpeed = 500){
        $this->brand =$brand;
        $this->color=$color;
        $this->maxSpeed = $maxSpeed;
     }

    public function move($speed, $time) {
        $this->setSpeed($speed);
    }


    public function stop(){
        $this->setSpeed(0);
    }

    protected function setSpeed($speed){
        $this->currentSpeed = $speed;
    }

    public function setColor($color) {
        if ($this->currentSpeed ==0) {
            $this->color = $color;
        }
    }

    public function getColor(){
        return $this->color;
    }

    public function bar(){
        echo  __CLASS__;
    }

   /* public function __invoke($x)
    {
        echo $x;
    }

    public function printX($x){          //тоже самое что ивок? wtf?
        echo $x;
    }  */

  /*  public function __get($name)
    {
       return $this->$name;
    }
  */
  public function getBrand(){
      return $this->brand;
  }

  public function __set($name, $value)
  {
      $this->$value = $name;
  }

  public function __get($name)
  {
      return $this->$name;
  }

}