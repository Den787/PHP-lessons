<?php
 //FACADE(Composition)

namespace models\patterns;

use models\patterns\computerBlocks\KeyBoard;
use models\patterns\computerBlocks\Monitor;
use models\patterns\computerBlocks\Processor;
use models\patterns\computerBlocks\VideoCard;

class Computer
{
    private $processor;
    private $videoCard;
    private $monitor;
    private $keyboard;

    function __construct(Processor $processor, VideoCard $videoCard, Monitor $monitor, KeyBoard $keyBoard)
    {
        $this->processor = $processor;
        $this->videoCard = $videoCard;
        $this->monitor = $monitor;
        $this->keyboard = $keyBoard;
    }

    public function setInfo($info) {
        $this->keyboard->setInfo($info, $this->processor);
    }

    public function getInfo(){
        $this->videoCard->renderInfo($this->processor->treatmentInfo(), $this->monitor);
    }

}