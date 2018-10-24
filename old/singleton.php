<?php
/**
 * Паттерн Одиночка
 */

class Singleton
{
    private static $single;
    protected $say = 'Привет Мир!!!';

    public function getSingle()
    {

        if (self::$single === null) {
            $class = __CLASS__;
            self::$single = new Singleton;

            return self::$single;
        } else {
            return self::$single;
        }
    }

    public function getSay()
    {
        echo $this->say;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}