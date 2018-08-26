<?php 
require_once __DIR__.'/User.php';
class Client extends User{
    protected $_billAmount;
    protected $_cart;
    
    public function __construct($id, $email, $createdAt)
    {
        parent::__construct($id, $email, $createdAt);
        $this->setBillAmount(0);
        $this->setCart();
    }

    public function setBillAmount($data)
    {
        $this->_billAmount = $data;
    }

    public function getBillAmount()
    {
        return $this->_billAmount;
    }

    public function setCart()
    {
        $this->_cart = array();
    }

    public function getCart()
    {
        return $this->_cart;
    }

    public function buy(Product $product)
    {
        $this->addProductToCart($product);
        $this->_billAmount += $product->getPrice();
    }

    public function addProductToCart($product)
    {
        array_push($this->_cart, $product);
    }
}