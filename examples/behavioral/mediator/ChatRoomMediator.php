<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 18.12.2018
 * Time: 16:22
 */

namespace examples\behavioral\mediator;


interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}