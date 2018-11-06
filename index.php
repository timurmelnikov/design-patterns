<?php
require_once 'vendor/autoload.php';

use examples\creational\abstract_factory\IronDoorFactory;
use examples\creational\abstract_factory\WoodenDoorFactory;
use examples\creational\builder\BurgerBuilder;
use examples\creational\factory_method\DevelopmentManager;
use examples\creational\factory_method\MarketingManager;
use examples\creational\prototype\Sheep;
use examples\creational\simple_factory\DoorFactory;


echo 'Простая фабрика (simple_factory):<br/>';
$door = DoorFactory::makeDoor(10, 11);
var_dump($door);

echo '<hr/>Фабричный метод (factory_method):<br/>';
$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Спрашивает о шаблонах проектирования.
echo '<br/>';
$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Спрашивает о создании сообщества.

echo '<hr/>Абстрактная фабрика (abstract_factory):<br/>';
$woodenFactory = new WoodenDoorFactory();
$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();
$door->getDescription();  // Output: Я деревянная дверь
$expert->getDescription(); // Output: Я могу устанавливать только деревянные двери
echo '<br/>';
$ironFactory = new IronDoorFactory();
$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();
$door->getDescription();  // Output: Я стальная дверь
$expert->getDescription(); // Output: Я могу устанавливать только стальные двери

echo '<hr/>Строитель (builder):<br/>';
$burger = (new BurgerBuilder(2))
    ->addCheese()
    ->build();
var_dump($burger);

echo '<hr/>Прототип (prototype):<br/>';
$original = new Sheep('Jolly');
echo $original->getName(); // Джолли
echo '<br/>';
echo $original->getCategory(); // Горная овечка
echo '<br/>Клон:<br/>';
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName(); // Долли
echo '<br/>';
echo $cloned->getCategory(); // Горная овечка