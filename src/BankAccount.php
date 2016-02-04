<?php
class BankAccount {

    protected $balance;

    function __construct()
    {
        $this->balance = 0;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount <= 0) {
            throw new Exception("Amount has to be > 0.");
        }
        if ($amount > 100000) {
            throw new Exception("Amounts over 100.000 have to be verified.");
        }

        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($amount <= 0) {
            throw new Exception("Amount has to be > 0.");
        }

        $this->balance -= $amount;
    }
}