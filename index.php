<?php
require_once 'vendor/autoload.php';

use examples\behavioral\chain_of_responsibility\Bank;
use examples\behavioral\chain_of_responsibility\Bitcoin;
use examples\behavioral\chain_of_responsibility\Paypal;
use examples\behavioral\iterator\RadioStation;
use examples\behavioral\iterator\StationList;
use examples\behavioral\visitor\Dolphin;
use examples\behavioral\visitor\Jump;
use examples\behavioral\visitor\Lion;
use examples\behavioral\visitor\Monkey;
use examples\behavioral\visitor\Speak;
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
use examples\structural\facade\Computer;
use examples\structural\facade\ComputerFacade;
use examples\structural\flyweight\TeaMaker;
use examples\structural\flyweight\TeaShop;
use examples\structural\proxy\LabDoor;
use examples\structural\proxy\Security;
use examples\behavioral\command\Bulb;
use examples\behavioral\command\TurnOn;
use examples\behavioral\command\TurnOff;
use examples\behavioral\command\RemoteControl;
use examples\behavioral\mediator\ChatRoom;
use examples\behavioral\mediator\User as UserMediator;
use examples\behavioral\memento\Editor;
use examples\behavioral\observer\JobSeeker;
use examples\behavioral\observer\JobPostings;
use examples\behavioral\observer\JobPost;


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


$computer = new ComputerFacade(new Computer());
$computer->turnOn();
echo '<br/>';
$computer->turnOff();

echo '<hr/>Приспособленец (flyweight):<br/>';

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

$shop->serve();
// Serving tea to table# 1
// Serving tea to table# 2
// Serving tea to table# 5

echo '<hr/>Заместитель (proxy):<br/>';

$door = new Security(new LabDoor());
$door->open('invalid'); // Big no! It ain't possible.
echo '<br/>';
$door->open('$ecr@t'); // Opening lab door
echo '<br/>';
$door->close(); // Closing lab door

echo '<hr/>Цепочка ответственности (Chain of responsibility):<br/>';
$bank = new Bank(100);          // У банка баланс 100
$paypal = new Paypal(200);      // У Paypal баланс 200
$bitcoin = new Bitcoin(300);    // У Bitcoin баланс 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Начнём с банка
$bank->pay(259);

echo '<hr/>Команда (command):<br/>';

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Лампочка зажглась!
echo '<br/>';
$remote->submit($turnOff); // Темнота!

echo '<hr/>Итератор (iterator):<br/>';

$stationList = new StationList();

$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

foreach ($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}

$stationList->removeStation(new RadioStation(102)); // Will remove station 102

echo '<br/>';

foreach ($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}


$mediator = new ChatRoom();

$john = new UserMediator('John Doe', $mediator);
$jane = new UserMediator('Jane Doe', $mediator);

$john->send('Hi there!');
echo '<br/>';
$jane->send('Hey!');

echo '<hr/>Хранитель (memento):<br/>';

$editor = new Editor();

// Пишем что-нибудь
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Сохранение состояния в: This is the first sentence. This is second.
$saved = $editor->save();

// Пишем ещё
$editor->type('And this is third.');

// Output: Содержимое до сохранения
echo $editor->getContent(); // This is the first sentence. This is second. And this is third.

// Восстанавливаем последнее сохранённое состояние
$editor->restore($saved);
echo '<br/>';
echo $editor->getContent(); // This is the first sentence. This is second.

echo '<hr/>Наблюдатель (observer):<br/>';

// Создаём подписчиков
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Создаём публикатора и прикрепляем подписчиков
$jobPostings = new JobPostings();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Добавляем новую вакансию и смотрим, будут ли уведомлены подписчики
$jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer

echo '<hr/>Посетитель (visitor):<br/>';
$monkey = new Monkey();
$lion = new Lion();
$dolphin = new Dolphin();
$speak = new Speak();
$monkey->accept($speak);    // Уа-уа-уааааа!
echo '<br/>';
$lion->accept($speak);      // Ррррррррр!
echo '<br/>';
$dolphin->accept($speak);   // Туут тутт туутт!
echo '<br/>';
$jump = new Jump();
$monkey->accept($speak);   // Ooh oo aa aa!
echo '<br/>';
$monkey->accept($jump);    // Jumped 20 feet high! on to the tree!
echo '<br/>';
$lion->accept($speak);     // Roaaar!
echo '<br/>';
$lion->accept($jump);      // Jumped 7 feet! Back on the ground!
echo '<br/>';
$dolphin->accept($speak);  // Tuut tutt tuutt!
echo '<br/>';
$dolphin->accept($jump);   // Walked on water a little and disappeared
