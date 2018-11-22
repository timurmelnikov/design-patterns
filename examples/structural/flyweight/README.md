## Приспособленец

### Аналогия


Обычно в заведениях общепита чай заваривают не отдельно для каждого клиента, а сразу в некой крупной ёмкости. Это позволяет экономить ресурсы: газ/электричество, время и т. д. Шаблон «Приспособленец» как раз посвящён общему использованию (sharing).


### Вкратце


Шаблон применяется для минимизирования использования памяти или вычислительной стоимости за счёт общего использования как можно большего количества одинаковых объектов.


### Википедия


«Приспособленец» — это объект, минимизирующий использование памяти за счёт общего с другими, такими же объектами использования как можно большего объёма данных. Это способ применения многочисленных объектов, когда простое повторяющееся представление приведёт к неприемлемому потреблению памяти.
Пример


Сделаем типы чая и чайника.

```php
// Приспособленец — то, что будет закешировано.
// Типы чая здесь — приспособленцы.
class KarakTea
{
}

// Действует как фабрика и экономит чай
class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}
```

Сделаем забегаловку TeaShop, принимающую и обрабатывающую заказы:

```php
class TeaShop
{
    protected $orders;
    protected $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $tea) {
            echo "Serving tea to table# " . $table;
        }
    }
}
```


Использование:

```php
$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('less sugar', 1);
$shop->takeOrder('more milk', 2);
$shop->takeOrder('without sugar', 5);

$shop->serve();
// Serving tea to table# 1
// Serving tea to table# 2
// Serving tea to table# 5
```