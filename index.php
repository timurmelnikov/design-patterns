<?php

require_once 'decorator.php';


$hello = new Hello();
$addstrong = new AddStrong($hello);
$addWorld = new AddWorld($addstrong);
echo $addWorld->operation();


