<?php
include 'autoloader.php';

use models\patterns\DBConnection;


$db = DBConnection::getInstance();

$db->setPort('3306');

echo $db->getPort();