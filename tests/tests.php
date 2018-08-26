<?php
// Step 1
require_once __DIR__.'/../models/User.php';
// Step 2 
require_once __DIR__.'/../models/Product.php'; 
require_once __DIR__.'/../models/Vegetable.php';
require_once __DIR__.'/../models/Cloth.php';
// Step 3
require_once __DIR__.'/../models/Client.php';
use PHPUnit\Framework\TestCase;
class Tests extends TestCase
{
    // Instantiate Classes
    public function setUp(){
        $this->userClass = new User('','toto@toto.com','');
        $this->productClass = new Product('','','');
        $this->vegetableClass = new Vegetable('','','','','');
        $this->clothClass = new Cloth('','','','');
        //$this->clientClass = new Client('','toto@toto.com','','','');
    }

    /*##########################################
    ################# Step 1 ##################
    #########################################*/

    // Check if User class has the 3 attributes : $_id - $_email - $_createdAt
    public function testUserHasAttributes()
    {
        $this->assertClassHasAttribute('_id',User::class);
        $this->assertClassHasAttribute('_email',User::class);
        $this->assertClassHasAttribute('_createdAt',User::class);
    }
    // Check if User class attribute "$_id" is a String
    public function testUserIdIsString()
    {
        $this->assertInternalType('string',$this->userClass->getId());
    }
    // Check if User class attribute "$_email" is a String
    public function testUserEmailIsString()
    {
        $this->assertInternalType('string',$this->userClass->getEmail());
    }
    // Check if User class attribute "$_createdAt" is a String (Date)
    public function testUserCreatedAtIsString()
    {
        $this->assertInternalType('string',$this->userClass->getCreatedAt());
    }
    // Check if those files exists
    public function testFileExists()
    {
        $this->assertFileExists(__DIR__.'/../models/User.php');
        $this->assertFileExists(__DIR__.'/../models/Client.php');
        $this->assertFileExists('./users.php');
        $this->assertFileExists('./userTable.php');
        // STEP 2
        $this->assertFileExists(__DIR__.'/../models/Product.php');
        $this->assertFileExists(__DIR__.'/../models/Vegetable.php');
        $this->assertFileExists(__DIR__.'/../models/Cloth.php');
        $this->assertFileExists('./products.php');
        $this->assertFileExists('./testOrder.php');
    }
    // Check if file is readable
    public function testFileIsReadable()
    {
        $this->assertFileIsReadable(__DIR__.'/../models/User.php');
        $this->assertFileIsReadable(__DIR__.'/../models/Client.php');
        $this->assertFileIsReadable('./users.php');
        $this->assertFileIsReadable('./userTable.php');
        // STEP 2
        $this->assertFileIsReadable(__DIR__.'/../models/Product.php');
        $this->assertFileIsReadable(__DIR__.'/../models/Vegetable.php');
        $this->assertFileIsReadable(__DIR__.'/../models/Cloth.php');
        $this->assertFileIsReadable('./products.php');
        $this->assertFileIsReadable('./testOrder.php');
    }
    // Check if User class attribute "$_email" is an email
    public function testUserEmailIsAnEmail()
    {
        //$this->assertContains('@',$this->userClass->getEmail());
        //$this->assertContains('.',$this->userClass->getEmail());
        /* $this->assertContains('/^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*
        @'.'[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$/',$this->userClass->getEmail()); */
        $this->assertTrue((bool)filter_var($this->userClass->getEmail(),FILTER_VALIDATE_EMAIL));
    }

    /*##########################################
    ################# Step 2 ##################
    #########################################*/

    // Check if Product class has attributes : "$_id" - "$_name" - "$_price"
    public function testProductHasAttributes()
    {
        $this->assertClassHasAttribute('_id',Product::class);
        $this->assertClassHasAttribute('_name',Product::class);
        $this->assertClassHasAttribute('_price',Product::class);
    }

    // Check if Product class attribute "$_id" is a String
    public function testProductIdIsString()
    {
        $this->assertInternalType('string',$this->productClass->getId());
    }
    // Check if Product class attribute "$_name" is a String
    public function testProductNameIsString()
    {
        $this->assertInternalType('string',$this->productClass->getName());
    }
    // Check if Product class attribute "$_price" is a String (Date)
    public function testProductPriceIsString()
    {
        $this->assertInternalType('string',$this->productClass->getPrice());
    }
    // Check if Vegetable class has attributes : "$_productorName" - "$_expiresAt"
    public function testVegetableHasAttributes()
    {
        $this->assertClassHasAttribute('_productorName',Vegetable::class);
        $this->assertClassHasAttribute('_expiresAt',Vegetable::class);
        // Heritage from Product
        $this->assertClassHasAttribute('_id',Vegetable::class);
        $this->assertClassHasAttribute('_name',Vegetable::class);
        $this->assertClassHasAttribute('_price',Vegetable::class);
    }
    // Check if Vegetable class attribute "$_productorName" is a String
    public function testVegetableProductorNameIsString()
    {
        $this->assertInternalType('string',$this->vegetableClass->getProductorName());
    }

    // Check if Vegetable class attribute "$_expiresAt" is a String
    public function testVegetableExpiresAtIsString()
    {
        $this->assertInternalType('string',$this->vegetableClass->getExpiresAt());
    }

    // Check if Vegetable is fresh
    public function testVegetableIsFresh()
    {
        $this->assertTrue($this->vegetableClass->isFresh());
    }
    // Check if Cloth class has attributes : "$_brand"
    public function testClothHasAttributes()
    {
        $this->assertClassHasAttribute('_brand',Cloth::class);
        // Heritage from Product
        $this->assertClassHasAttribute('_id',Cloth::class);
        $this->assertClassHasAttribute('_name',Cloth::class);
        $this->assertClassHasAttribute('_price',Cloth::class);
    }
    // Check if Cloth class attribute "$_brand" is a String
    public function testClothBrandIsString()
    {
        $this->assertInternalType('string',$this->clothClass->getBrand());
    }

    /*##########################################
    ################# Step 3 ##################
    #########################################*/
    
    // Check if Client class has attributes
    public function testClientHasAttribute()
    {
        $this->assertClassHasAttribute('_billAmount', Client::class);
        $this->assertClasshasAttribute('_cart', Client::class);
        // Heritage from User
        $this->assertClassHasAttribute('_id', Client::class);
        $this->assertClassHasAttribute('_email', Client::class);
        $this->assertClassHasAttribute('_createdAt', Client::class);
    }

}
?>