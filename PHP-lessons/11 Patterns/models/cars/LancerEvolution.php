<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.10.2018
 * Time: 15:49
 */
namespace models\Cars;

class LancerEvolution extends Mitsubishi
{
    public $brand2 = 'LE';
    public $tireLifeTime =60;
    public function drift(){
        $this->tireLifeTime = $this->tireLifeTime-5;
    }
}