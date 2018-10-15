<?php
//WRAPPER PATTERN  - обертка а над классом(добавляем методы над уже имеющимися)

namespace models\patterns;
use models\living\Human;

class Exoskeleton
{
    private $human;

    function __construct(Human $human)
    {
         $this->human = $human;
    }

    public function move()
    {
         $this->human->move();  //берет из класса Human
         echo '<br/>';   //свое новое
         echo 'Слышен звук стальных шагов'; //свое новое
    }

}