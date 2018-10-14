<?php

namespace interfaces;

interface IMovable {

    public function start();
    public function setSpeed($speed);
    public function stop();
}