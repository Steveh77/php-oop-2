<?php

require_once __DIR__ . '/customer.php';

class LoggedCustomer extends Customer
{
    protected $login;
    protected $discount;

    public function __construct($first_name, $last_name, $age, $payment, $login, $discount)
    {
        parent::__construct($first_name, $last_name, $age, $payment);
        $this->setLogin($login);
        $this->setDiscount($discount);
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
