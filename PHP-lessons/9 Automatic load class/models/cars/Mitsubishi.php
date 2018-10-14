<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.10.2018
 * Time: 13:31
 */
namespace models\Cars;

class Mitsubishi extends Car implements IDragable, IDriftable
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
        return $this->color;
  }

public function bar(){
       parent::bar();
       echo ',';
        echo __CLASS__;
}

    public function getdynamic($param)
    {
        echo '9.4c to 100';
    }

    public function move($speed)
    {
        $this->setSpeed($speed);
    }

    public function stop()
    {
        $this->setSpeed(0);
    }

    public function blockDifference()
    {
        echo 'block';
    }

    public function useNO2()
    {
        $this->setSpeed(600);
    }


    public function setCorner()
    {
        // TODO: Implement setCorner() method.
    }

    public function start()
    {
        echo '15';
    }


    public function setSpeed($speed)
    {
        $this->currentSpeed = $speed;
    }
}