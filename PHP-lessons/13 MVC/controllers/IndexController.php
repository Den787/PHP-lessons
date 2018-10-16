<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2018
 * Time: 10:17
 */

namespace controllers;
use models\Cars\Mitsubishi;
use models\User;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        $user = new User();                       //в контроллере не рекмендуется все прописывать лучше в самой модели
        $userList = $user->getAllUsersList();
     //   echo '<pre>';
     //   print_r($userList);
        $mitsubishi = new Mitsubishi();
        $this->render('index/index.php',['mitsubishi'=>$mitsubishi, 'users'=>$userList]);
    }

}