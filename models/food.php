<?php

require_once __DIR__ . '/product.php';

class Food extends Product
{
    protected $type;
    protected $weight;
    protected $dogSize;


    public function __construct($name, $category, $description, $price, $type, $weight, $dogSize)
    {
        parent::__construct($name, $category, $description, $price);
        $this->setType($type);
        $this->setWeight($weight);
        $this->setdogSize($dogSize);
    }

    /**
     * Get the value of TYPE
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of TYPE
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of WEIGHT
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of WEIGHT
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of DOGSIZE
     */
    public function getDogSize()
    {
        return $this->dogSize;
    }

    /**
     * Set the value of DOGSIZE
     *
     * @return  self
     */
    public function setDogSize($dogSize)
    {
        $this->dogSize = $dogSize;

        return $this;
    }
}
