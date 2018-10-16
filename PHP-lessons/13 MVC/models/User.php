<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2018
 * Time: 9:52
 */
namespace models;
use models\patterns\DBConnection;

class User
{
    public function getAllUsersList(){
        $db = DBConnection::getInstance();
        $result = $db->query('Select * from user order by name ');
        $userList = mysqli_fetch_all($result,MYSQLI_ASSOC);

        foreach ($userList as $key =>$user) {
            $userList[$key]['name'] = $user['age'];  //меняем поле имя на возраст (если закоммитить то все норм)
        }

        return $userList;
    }

    public function getAllUsersNameList(){
        $db = DBConnection::getInstance();
        $result = $db->query('Select * from user order by name ');
        $userList = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $userList;
    }

}