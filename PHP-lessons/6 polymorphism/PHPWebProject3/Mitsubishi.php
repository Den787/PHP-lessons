<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.10.2018
 * Time: 13:31
 */

class Mitsubishi extends Car
{
  public $sign = 'M';
    public function __construct($color = 'Black', $maxSpeed = 500)
  {
      parent::__construct('Mitsubishi', $color, $maxSpeed);
  }

  public function setColor($color){
        if($this->currentSpeed==0) {
            $this->color = $color.'_'.$this->sign;
        }
  }
  public function getColor(){
        return 'Это цвет '.$this->color;
  }

public function bar(){
       parent::bar();
       echo ',';
        echo __CLASS__;
}

}