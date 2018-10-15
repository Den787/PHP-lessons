<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.10.2018
 * Time: 12:51
 */
namespace models\patterns\computerBlocks;

class Processor
{
    protected $info;
    public function treatmentInfo()
    {
        return $this->info. ' - обработано! <br/>';
    }

    public function setInfo($info){
        $this->info = $info;
    }

}