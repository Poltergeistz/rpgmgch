<?php 
class User{
    private $_id;
    private $_email;
    private $_createdAt;

    public function __construct($id, $email, $createdAt)
    {
    $this->setId($id);
    $this->setEmail($email);
    $this->setCreatedAt($createdAt);
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($data)
    {
        $this->_id = $data;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($data)
    {
        $this->_email = $data;
    }

    public function getCreatedAt()
    {
    return $this->_createdAt;
    }

    public function setCreatedAt($data)
    {
        $this->_createdAt = $data;
    }

}