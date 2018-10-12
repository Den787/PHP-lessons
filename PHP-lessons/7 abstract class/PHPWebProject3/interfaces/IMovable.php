<?php

interface IMovable {

    public function start();
    public function setSpeed($speed);
    public function stop();
}