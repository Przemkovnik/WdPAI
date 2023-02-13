<?php


class User
{
    private $email;
    private $password;
    private $legal_name;


    public function __construct(string $email, string $password, string $legal_name)
    {
        $this->email = $email;
        $this->password = $password;
        $this->legal_name = $legal_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getLegalName(): string
    {
        return $this->legal_name;
    }

    public function setLegalName(string $legal_name)
    {
        $this->legal_name = $legal_name;
    }
}