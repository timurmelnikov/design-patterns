<?php
require_once "decorator.php";
require_once "singleton.php";
require_once "factory.php";
$hello = new Hello();
$addstrong = new AddStrong($hello);
$addWorld = new AddWorld($addstrong);
echo $addWorld->operation();
echo '<hr/>';
Singleton::getSingle()->getSay();
var_dump(Singleton::getSingle());
//echo '<hr/>';
//$role = 'User';
//switch ($role) {
//    case 'Admin':
//        $login = new Admin();
//        break;
//    case 'Moderator':
//        $login = new Moderator();
//        break;
//    case 'User':
//        $login = new User();
//        break;
//    case 'Guest':
//        $login = new Guest();
//        break;
//}
//var_dump($login);
echo '<hr/>';
try {
    $login1 = Factory::createUsers('Admin');
    var_dump($login1);
} catch (Exception $e) {
    echo $e;
}
