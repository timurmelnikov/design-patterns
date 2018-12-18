## Посредник

## Аналогия


Когда вы говорите с кем-то по мобильнику, то между вами и собеседником находится мобильный оператор. То есть сигнал передаётся через него, а не напрямую. В данном примере оператор — посредник.


## Вкратце


Шаблон «Посредник» подразумевает добавление стороннего объекта («посредника») для управления взаимодействием между двумя объектами («коллегами»). Шаблон помогает уменьшить связанность (coupling) классов, общающихся друг с другом, ведь теперь они не должны знать о реализациях своих собеседников.


## Википедия


Шаблон определяет объект, который инкапсулирует способ взаимодействия набора объектов.
Пример


Простейший пример: чат («посредник»), в котором пользователи («коллеги») отправляют друг другу сообщения.


Создадим «посредника»:

```php
interface ChatRoomMediator 
{
    public function showMessage(User $user, string $message);
}

// Посредник
class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message;
    }
}
```

Теперь создадим «коллег»:

```php
class User {
    protected $name;
    protected $chatMediator;

    public function __construct(string $name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        $this->chatMediator->showMessage($this, $message);
    }
}
```

Использование:

```php
$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');

// Выходной вид
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!
```