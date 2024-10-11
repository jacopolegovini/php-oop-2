<?php

class Customer
{
    public $account;
    public $workingCreditCard;

    public function __construct(bool $account, bool $workingCreditCard)
    {
        $this->account = $account;
        $this->workingCreditCard = $workingCreditCard;
    }

    public function hasAnAccount()
    {
        $this->account = false;
        if ($this->account = true) return true;
    }

    public function isCreditCardExpired()
    {
        $this->workingCreditCard = false;
        if ($this->workingCreditCard = true) return true;
    }

    public function getDiscount()
    {
        // if ($this->workingCreditCard) return 
    }
}
