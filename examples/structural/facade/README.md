## Фасад

### Аналогия


Как включить компьютер? Вы скажете: «Нажать кнопку включения». Это потому, что вы используете простой интерфейс, предоставляемый компьютером наружу. А внутри него происходит очень много процессов. Простой интерфейс для сложной подсистемы — это фасад.


## Вкратце


Шаблон «Фасад» предоставляет упрощённый интерфейс для сложной подсистемы.


### Википедия


«Фасад» — это объект, предоставляющий упрощённый интерфейс для более крупного тела кода, например библиотеки классов.
Пример


Создадим класс computer:

```php
class Computer
{
    public function getElectricShock()
    {
        echo "Ouch!";
    }

    public function makeSound()
    {
        echo "Beep beep!";
    }

    public function showLoadingScreen()
    {
        echo "Loading..";
    }

    public function bam()
    {
        echo "Ready to be used!";
    }

    public function closeEverything()
    {
        echo "Bup bup bup buzzzz!";
    }

    public function sooth()
    {
        echo "Zzzzz";
    }

    public function pullCurrent()
    {
        echo "Haaah!";
    }
}
```

Теперь «фасад»:

```php
class ComputerFacade
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff()
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}
```

Использование:

```php
$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!
$computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
```