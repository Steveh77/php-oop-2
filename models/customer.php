<?php
class Customer
{
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $payment;





    public function __construct($first_name, $last_name, $age, $payment)
    {
        $this->setFirst_Name($first_name);
        $this->setLast_Name($last_name);
        $this->setAge($age);
        $this->setPayment($payment);
    }

    /**
     * Get the value of first_name
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set the value of payment
     *
     * @return  self
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }
}
