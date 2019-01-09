<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 09.01.2019
 * Time: 10:05
 */

namespace examples\behavioral\template_method;


abstract class Builder
{

    // Шаблонный метод
    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }

    abstract public function test();
    abstract public function lint();
    abstract public function assemble();
    abstract public function deploy();
}