<?php
class Product{
    private $_id;
    private $_name;
    private $_price;

    public function __construct($id, $name, $price)
    {
    $this->setId($id);
    $this->setName($name);
    $this->setPrice($price);
    }

    public function setId($data)
    {
        $this->_id = $data;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setName($data)
    {
        $this->_name = $data;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setPrice($data)
    {
        $this->_price = $data;
    }

    public function getPrice()
    {
        return $this->_price;
    }
}