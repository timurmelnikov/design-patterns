## Мост

### Аналогия


Допустим, у вас есть сайт с несколькими страницами. Вы хотите позволить пользователям менять темы оформления страниц. Как бы вы поступили? Создали множественные копии каждой страницы для каждой темы или просто сделали отдельные темы и подгружали их в соответствии с настройками пользователей? Шаблон «Мост» позволяет реализовать второй подход.

### Вкратце


Шаблон «Мост» — это предпочтение компоновки наследованию. Подробности реализации передаются из одной иерархии другому объекту с отдельной иерархией.


### Википедия


Шаблон «Мост» означает отделение абстракции от реализации, чтобы их обе можно было изменять независимо друг от друга.
Пример


Реализуем вышеописанный пример с веб-страницами. Сделаем иерархию WebPage:

```php
interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}

class About implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "About page in " . $this->theme->getColor();
    }
}

class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Careers page in " . $this->theme->getColor();
    }
}
```

Отделим иерархию тем:

```php
interface Theme
{
    public function getColor();
}

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}
class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}
class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'Light blue';
    }
}
```

Обе иерархии:

```php
$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";
```