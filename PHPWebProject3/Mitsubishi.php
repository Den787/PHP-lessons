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
}