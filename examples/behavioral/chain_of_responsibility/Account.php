<?php
/**
 * Created by PhpStorm.
 * User: timur
 * Date: 29.11.18
 * Time: 15:33
 */

namespace examples\behavioral\chain_of_responsibility;


abstract class Account
{
    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay(float $amountToPay)
    {
        if ($this->canPay($amountToPay)) {
            echo sprintf('Paid %s using %s' . PHP_EOL, $amountToPay, get_called_class() . '<br/>');
        } elseif ($this->successor) {
            echo sprintf('Cannot pay using %s. Proceeding ..' . PHP_EOL, get_called_class() . '<br/>');
            $this->successor->pay($amountToPay);
        } else {
            throw new Exception('None of the accounts have enough balance' . '<br/>');
        }
    }

    public function canPay($amount): bool
    {
        return $this->balance >= $amount;
    }
}
