## Компоновщик

### Аналогия


Каждая компания состоит из сотрудников. У каждого сотрудника есть одни и те же свойства: зарплата, обязанности, отчётность перед кем-то, субординация...


### Вкратце


Шаблон «Компоновщик» позволяет клиентам обрабатывать отдельные объекты в едином порядке.


### Википедия


Шаблон «Компоновщик» описывает общий порядок обработки группы объектов, словно это одиночный экземпляр объекта. Суть шаблона — компонование объектов в древовидную структуру для представления иерархии от частного к целому. Шаблон позволяет клиентам одинаково обращаться к отдельным объектам и к группам объектов.
Пример
Вот разные типы сотрудников:

```php
interface Employee
{
    public function __construct(string $name, float $salary);
    public function getName(): string;
    public function setSalary(float $salary);
    public function getSalary(): float;
    public function getRoles(): array;
}

class Developer implements Employee
{
    protected $salary;
    protected $name;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }
}

class Designer implements Employee
{
    protected $salary;
    protected $name;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }
}
```

А вот компания, которая состоит из сотрудников разных типов:

```php
class Organization
{
    protected $employees;

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries(): float
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}
```

Использование:

```php
// Подготовка сотрудников
$john = new Developer('John Doe', 12000);
$jane = new Designer('Jane Doe', 15000);

// Включение их в штат
$organization = new Organization();
$organization->addEmployee($john);
$organization->addEmployee($jane);

echo "Net salaries: " . $organization->getNetSalaries(); // Net Salaries: 27000
```