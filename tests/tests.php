<?php
require_once './User.php';
use PHPUnit\Framework\TestCase;
class Tests extends TestCase
{
    public function testUserHasAttributes()
    {
        $this->assertClassHasAttribute('_id',User::class);
        $this->assertClassHasAttribute('_email',User::class);
        $this->assertClassHasAttribute('_createdAt',User::class);
    }
}
?>