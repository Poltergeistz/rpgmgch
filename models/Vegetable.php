<?php
require_once __DIR__.'/Product.php';
class Vegetable extends Product
{
    protected $_productorName;
    protected $_expiresAt;

    public function __construct($id, $name, $price,$productorName, $expiresAt)
    {
    parent::__construct($id, $name, $price);
    $this->setProductorName($productorName);
    $this->setExpiresAt($expiresAt);
    }

    public function isFresh()
    {
        return ($this->getExpiresAt() < date('d-m-Y'));
        
    }

    public function setProductorName($data)
    {
        $this->_productorName = $data;
    }

    public function getProductorName()
    {
        return $this->_productorName;
    }

    public function setExpiresAt($data)
    {
        $this->_expiresAt = $data;
    }

    public function getExpiresAt()
    {
        return $this->_expiresAt;
    }
}