<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.10.2018
 * Time: 16:59
 */

namespace models\living;

use traits\traitMoving;


class Human
{
    use traitMoving;
    public function drive(IMovable $IMovableObject){

        $IMovableObject->start();
    }


}



/*class Human
{
    public function drive(IMovable $IMovableObject){
        if (($IMovableObject instanceof Car) && $IMovableObject->getColor() =='red') {
            throw new RedColorCarException('Не поеду в красной машине');
        } elseif (($IMovableObject instanceof Car) && $IMovableObject->getColor() == 'green') {
            throw new GreenColorCarException('Не поеду в зеленой машине');
        }
        $IMovableObject->start();
    }
}*/