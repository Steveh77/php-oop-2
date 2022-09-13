<?php

require_once __DIR__ . '/product.php';

class Accessorie extends Product
{
    protected $type;
    protected $color;
    protected $weight;


    public function __construct($name, $category, $description, $price, $type, $color, $weight)
    {
        parent::__construct($name, $category, $description, $price);
        $this->setType($type);
        $this->setColor($color);
        $this->setWeight($weight);
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
