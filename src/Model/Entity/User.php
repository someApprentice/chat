<?php
namespace App\Model\Entity;

class User
{
    protected $id;

    protected $login;

    protected $name;

    protected $hash;

    protected $salt;

    public function fillData(array $data) {
        $allowed = array(
            'id',
            'login',
            'name',
            'hash',
            'salt'
        );

        foreach($data as $key => $value) {
            if (in_array($key, $allowed)) {
                $this->$key = $value;
            }
        }

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin(string $login)
    {
        $this->login = $login;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash(string $hash)
    {
        $this->hash = $hash;

        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt(string $salt)
    {
        $this->salt = $salt;

        return $this;
    }
}