<?php

require_once __DIR__ . '/product.php';

class Game extends Product
{
    public $color;
    public $weight;


    public function __construct($name, $category, $description, $price, $color, $weight)
    {
        parent::__construct($name, $category, $description, $price);
        $this->setColor($color);
        $this->setWeight($weight);
    }

    /**
     * Get the value of COLOR
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of COLOR
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

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
}
