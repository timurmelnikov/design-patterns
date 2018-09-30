<?php
function __autoload($class)
{
    require_once "src/$class.php";
}

$hello = new Hello();
$addstrong = new AddStrong($hello);
$addWorld = new AddWorld($addstrong);
echo $addWorld->operation();
echo '<hr/>';
Singleton::getSingle()->getSay();
var_dump(Singleton::getSingle());
