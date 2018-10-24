<?php
//use classes\factory\Factory;
require_once 'vendor/autoload.php';

use app\factory\Factory;




try {


$login1 = Factory::createUsers('User');
    var_dump($login1);
} catch (\Exception $e) {
    echo $e;
}

