<?php
class Cloth extends Product
{
    protected $_brand;

    public function __construct($id, $name, $price,$brand)
    {
        parent::__construct($id, $name, $price);
        $this->setBrand($brand);
    }

    public function try()
    {

    }
    public function setBrand($data)
    {
        $this->_brand = $data;
    }
    public function getBrand()
    {
        return $this->_brand;
    }

}