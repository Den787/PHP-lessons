<?php

namespace interfaces;

//require_once 'IMovable.php';  - заменить на use?
interface IDriftable extends IMovable
{
    public function setCorner();
}