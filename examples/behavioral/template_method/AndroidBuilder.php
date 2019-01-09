<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 09.01.2019
 * Time: 10:05
 */

namespace examples\behavioral\template_method;


class AndroidBuilder extends Builder
{
    public function test()
    {
        echo 'Running android tests<br/>';
    }

    public function lint()
    {
        echo 'Linting the android code<br/>';
    }

    public function assemble()
    {
        echo 'Assembling the android build<br/>';
    }

    public function deploy()
    {
        echo 'Deploying android build to server<br/>';
    }
}