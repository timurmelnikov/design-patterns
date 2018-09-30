<?php
require_once "decorator.php";
require_once "singleton.php";
$hello = new Hello();
$addstrong = new AddStrong($hello);
$addWorld = new AddWorld($addstrong);
echo $addWorld->operation();
echo '<hr/>';
Singleton::getSingle()->getSay();
var_dump(Singleton::getSingle());
