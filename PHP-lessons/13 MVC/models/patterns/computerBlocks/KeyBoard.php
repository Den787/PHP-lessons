<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.10.2018
 * Time: 12:50
 */
namespace models\patterns\computerBlocks;

class KeyBoard
{
    public function setInfo($info, Processor $processor)
    {
        $processor->setInfo($info);
    }

}