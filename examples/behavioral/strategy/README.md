## Стратегия

### Аналогия


Возьмём пример с пузырьковой сортировкой. Мы её реализовали, но с ростом объёмов данных сортировка стала выполняться очень медленно. Тогда мы сделали быструю сортировку (Quick sort). Алгоритм работает быстрее на больших объёмах, но на маленьких он очень медленный. Тогда мы реализовали стратегию, при которой для маленьких объёмов данных используется пузырьковая сортировка, а для больших — быстрая.


### Вкратце


Шаблон «Стратегия» позволяет переключаться между алгоритмами или стратегиями в зависимости от ситуации.


### Википедия


Шаблон «Стратегия» позволяет при выполнении выбирать поведение алгоритма.

### Пример


Возьмём вышеописанный пример. Сначала сделаем интерфейс стратегии и реализации самих стратегий.

```php
interface SortStrategy
{
    public function sort(array $dataset): array;
}

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using bubble sort";

        // Do sorting
        return $dataset;
    }
}

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using quick sort";

        // Do sorting
        return $dataset;
    }
}
```

Теперь реализуем клиента, который будет использовать нашу стратегию.

```php
class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): array
    {
        return $this->sorter->sort($dataset);
    }
}
```

Использование:

```php
$dataset = [1, 5, 4, 3, 2, 8];

$sorter = new Sorter(new BubbleSortStrategy());
$sorter->sort($dataset); // Output : Пузырьковая сортировка

$sorter = new Sorter(new QuickSortStrategy());
$sorter->sort($dataset); // Output : Быстрая сортировка
```