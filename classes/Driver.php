<?php

class Driver
{
    private string $name;
    private DateTime $dateOfBirth;
    private int $amountOfMoney;

    public function __construct(string $name, DateTime $dateOfBirth, int $amountOfMoney)
    {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->amountOfMoney = $amountOfMoney;
    }

    function pay(int $sum) {
        if ($sum > $this->amountOfMoney) {
            return false;
        }

        $this->amountOfMoney -= $sum;
        return true;
    }

    function getName() :string {
        return $this->name;
    }
}