## Команда

## Аналогия


Вы пришли в ресторан. Вы (Client) просите официанта (Invoker) принести блюда (Command). Официант перенаправляет запрос шеф-повару (Receiver), который знает, что и как готовить. Другой пример: вы (Client) включаете (Command) телевизор (Receiver) с помощью пульта (Invoker).


## Вкратце


Шаблон «Команда» позволяет инкапсулировать действия в объекты. Ключевая идея — предоставить средства отделения клиента от получателя.


## Википедия


В шаблоне «Команда» объект используется для инкапсуляции всей информации, необходимой для выполнения действия либо для его инициирования позднее. Информация включает в себя имя метода; объект, владеющий методом; значения параметров метода.
Пример


Сначала сделаем получателя, содержащего реализации каждого действия, которое может быть выполнено.

```php
// Receiver
class Bulb
{
    public function turnOn()
    {
        echo "Bulb has been lit";
    }

    public function turnOff()
    {
        echo "Darkness!";
    }
}
```

Теперь сделаем интерфейс, который будет реализовывать каждая команда. Также сделаем набор команд.

```php
interface Command
{
    public function execute();
    public function undo();
    public function redo();
}

// Command
class TurnOn implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOn();
    }

    public function undo()
    {
        $this->bulb->turnOff();
    }

    public function redo()
    {
        $this->execute();
    }
}

class TurnOff implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}
```

Теперь сделаем вызывающего Invoker, с которым будет взаимодействовать клиент для обработки команд.

```php
// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
```

Посмотрим, как всё это может использовать клиент:

```php
$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Лампочка зажглась!
$remote->submit($turnOff); // Темнота!
```

Шаблон «Команда» можно использовать и для реализации системы на основе транзакций. То есть системы, в которой вы сохраняете историю команд по мере их выполнения. Если последняя команда выполнена успешно, то всё хорошо. В противном случае система итерирует по истории и делает undo для всех выполненных команд.