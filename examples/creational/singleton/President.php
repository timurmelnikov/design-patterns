<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 06.11.18
 * Time: 9:17
 */

namespace examples\creational\singleton;


final class President
{
    private static $instance;

    private function __construct()
    {
        // Прячем конструктор
    }

    public static function getInstance(): President
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone()
    {
        // Отключаем клонирование
    }

    private function __wakeup()
    {
        // Отключаем десериализацию
    }
}