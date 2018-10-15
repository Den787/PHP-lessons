<?php

namespace models\patterns\computerBlocks;

class VideoCard
{
    public function renderInfo($info, Monitor $monitor) {
        $monitor->showInfo($info);
    }

}