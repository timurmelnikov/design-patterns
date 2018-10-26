<?php
require_once 'vendor/autoload.php';

use examples\factory_method\DevelopmentManager;
use examples\factory_method\MarketingManager;
use examples\simple_factory\DoorFactory;

echo 'Простая фабрика (simple_factory):<br/>';
$door = DoorFactory::makeDoor(10, 11);
var_dump($door);
$door->setHeight(12.3);
$door->setWidth(12.76);
var_dump($door);

echo '<hr/>Фабричный метод (factory_method):<br/>';
$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Спрашивает о шаблонах проектирования.
echo '<br/>';
$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Спрашивает о создании сообщества.