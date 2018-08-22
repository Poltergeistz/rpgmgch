<?php
require_once './User.php';
use PHPUnit\Framework\TestCase;
class Tests extends TestCase
{
    // User instance
    public function setUp(){
        $this->userClass = new User('','toto@toto.com','');
    }
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
        $this->assertFileExists('./User.php');
        $this->assertFileExists('./Client.php');
        $this->assertFileExists('./users.php');
        $this->assertFileExists('./userTable.php');
    }
    // Check if file is readable
    public function testFileIsReadable()
    {
        $this->assertFileIsReadable('./User.php');
        $this->assertFileIsReadable('./Client.php');
        $this->assertFileIsReadable('./users.php');
        $this->assertFileIsReadable('./userTable.php');
    }
    // Check if User class attribute "$_email" is an email
    public function testUserEmailIsAnEmail()
    {
        $this->assertContains('@',$this->userClass->getEmail());
        $this->assertContains('.',$this->userClass->getEmail());
        /* $this->assertContains('^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*
        @'.'[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$',$this->userClass->getEmail()); */
        // $this->assertTrue(filter_var($this->userClass->getEmail(),FILTER_VALIDATE_EMAIL));
    }
}
?>