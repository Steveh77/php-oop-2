<?php
class Product
{
    protected $name;
    protected $category;
    protected $description;
    protected $price;


    public function __construct($name, $category, $description, $price)
    {
        $this->setName($name);
        $this->setCategory($category);
        $this->setDescription($description);
        $this->setPrice($price);
    }

    /**
     * Get the value of NAME
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of NAME
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of CATEGORY
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of CATEGORY
     *
     * @return  self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of DESCRITPTION
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of DESCRITPTION
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of PRICE
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of PRICE
     *
     * @return  self
     */
    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0) return;
        $this->price = $price;
    }
}
