<?php
require_once 'vendor/autoload.php';

use examples\creational\abstract_factory\IronDoorFactory;
use examples\creational\abstract_factory\WoodenDoorFactory;
use examples\creational\builder\BurgerBuilder;
use examples\creational\factory_method\DevelopmentManager;
use examples\creational\factory_method\MarketingManager;
use examples\creational\prototype\Sheep;
use examples\creational\simple_factory\DoorFactory;
use examples\creational\singleton\President;
use examples\structural\adapter\Hunter;
use examples\structural\adapter\WildDog;
use examples\structural\adapter\WildDogAdapter;
use examples\structural\bridge\About;
use examples\structural\bridge\Careers;
use examples\structural\bridge\DarkTheme;
use examples\structural\composite\Designer;
use examples\structural\composite\Developer;
use examples\structural\composite\Organization;
use examples\structural\decorator\MilkCoffee;
use examples\structural\decorator\SimpleCoffee;
use examples\structural\decorator\VanillaCoffee;
use examples\structural\decorator\WhipCoffee;

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
$door->getDescription(); // Output: Я деревянная дверь
$expert->getDescription(); // Output: Я могу устанавливать только деревянные двери
echo '<br/>';
$ironFactory = new IronDoorFactory();
$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();
$door->getDescription(); // Output: Я стальная дверь
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

echo '<hr/>Одиночка (singleton):<br/>';
$president1 = President::getInstance();
$president2 = President::getInstance();
var_dump($president1 === $president2); // true

echo '<hr/>Адаптер (adapter):<br/>';
$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);

echo '<hr/>Мост (bridge):<br/>';
$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo '<br/>';
echo $careers->getContent(); // "Careers page in Dark Black";

echo '<hr/>Компоновщик (composite):<br/>';
// Подготовка сотрудников
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Включение их в штат
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 27000


echo '<hr/>Декоратор (decorator):<br/>';
$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo '<br/>';
echo $someCoffee->getDescription(); // Simple Coffee
echo '<br/>';

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo '<br/>';
echo $someCoffee->getDescription(); // Simple Coffee, milk
echo '<br/>';

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost(); // 17
echo '<br/>';
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip
echo '<br/>';

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo '<br/>';
echo $someCoffee->getDescription(); // Simple Coffee, milk, whip, vanilla