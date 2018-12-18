<?php
/**
 * Created by PhpStorm.
 * User: melnikov.t
 * Date: 18.12.2018
 * Time: 16:22
 */

namespace examples\behavioral\mediator;


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