<?php

require_once 'IMovable.php';
interface IDriftable extends IMovable
{
    public function setCorner();
}